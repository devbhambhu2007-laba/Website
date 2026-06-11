(() => {
	const storageKey = 'reclaim-the-web-theme';
	const root = document.documentElement;
	const toggle = document.querySelector( '[data-reclaim-theme-toggle], [data-theme-toggle]' );
	const mobileMenuToggle = document.querySelector( '[data-reclaim-mobile-menu-toggle], [data-mobile-menu-toggle]' );
	const mobileNav = document.querySelector( '[data-reclaim-mobile-nav], .primary-navigation' );
	const mobileNavBackdrop = document.querySelector( '[data-reclaim-mobile-nav-backdrop], [data-mobile-nav-backdrop]' );
	const mobileNavMedia = window.matchMedia( '(max-width: 680px)' );
	const mobileNavOriginalParent = mobileNav ? mobileNav.parentNode : null;
	const mobileNavReferenceNode = mobileNav ? mobileNav.nextSibling : null;
	const mobileNavBackdropOriginalParent = mobileNavBackdrop ? mobileNavBackdrop.parentNode : null;
	const mobileNavBackdropReferenceNode = mobileNavBackdrop ? mobileNavBackdrop.nextSibling : null;
	const media = window.matchMedia( '(prefers-color-scheme: dark)' );

	root.classList.add( 'has-js' );

	const getStoredTheme = () => {
		try {
			return localStorage.getItem( storageKey );
		} catch ( error ) {
			return null;
		}
	};

	const storeTheme = ( theme ) => {
		try {
			localStorage.setItem( storageKey, theme );
		} catch ( error ) {
			// Ignore storage failures, such as strict browser settings.
		}
	};

	const currentTheme = () => root.dataset.theme || ( media.matches ? 'dark' : 'light' );

	const updateToggle = () => {
		if ( ! toggle ) {
			return;
		}

		const isDark = 'dark' === currentTheme();
		const icon = toggle.querySelector( '.theme-toggle__icon' );
		const text = toggle.querySelector( '.theme-toggle__text' );
		const currentText = text ? text.textContent : '';
		const currentAria = toggle.getAttribute( 'aria-label' ) || '';
		const labelDark = toggle.dataset.themeLabelDark || toggle.dataset.reclaimThemeLabelDark || currentText;
		const labelLight = toggle.dataset.themeLabelLight || toggle.dataset.reclaimThemeLabelLight || currentText;
		const ariaDark = toggle.dataset.themeAriaDark || toggle.dataset.reclaimThemeAriaDark || currentAria;
		const ariaLight = toggle.dataset.themeAriaLight || toggle.dataset.reclaimThemeAriaLight || currentAria;

		toggle.setAttribute( 'aria-pressed', String( isDark ) );
		toggle.setAttribute( 'aria-label', isDark ? ariaLight : ariaDark );

		if ( icon ) {
			icon.textContent = isDark ? '☀' : '☾';
		}

		if ( text ) {
			text.textContent = isDark ? labelLight : labelDark;
		}
	};

	const setTheme = ( theme, persist = false ) => {
		root.dataset.theme = theme;

		if ( persist ) {
			storeTheme( theme );
		}

		updateToggle();
	};

	let mobileNavOpen = false;
	const inertedSiblings = [];

	const applyModalSemantics = ( active ) => {
		if ( ! mobileNav ) {
			return;
		}

		const keepMobileNavElementActive = ( element ) => (
			element === mobileNav ||
			element === mobileMenuToggle ||
			element === mobileNavBackdrop ||
			( mobileMenuToggle && element.contains( mobileMenuToggle ) ) ||
			( mobileNavBackdrop && element.contains( mobileNavBackdrop ) )
		);

		const inertElement = ( element ) => {
			if ( ! keepMobileNavElementActive( element ) && ! element.inert ) {
				element.inert = true;
				inertedSiblings.push( element );
			}
		};

		if ( active ) {
			mobileNav.setAttribute( 'role', 'dialog' );
			mobileNav.setAttribute( 'aria-modal', 'true' );

			Array.from( document.body.children ).forEach( ( child ) => {
				if ( child === mobileNav ) {
					return;
				}

				if ( keepMobileNavElementActive( child ) ) {
					Array.from( child.children ).forEach( inertElement );
					return;
				}

				inertElement( child );
			} );
			return;
		}

		mobileNav.removeAttribute( 'role' );
		mobileNav.removeAttribute( 'aria-modal' );

		while ( inertedSiblings.length ) {
			inertedSiblings.pop().inert = false;
		}
	};

	const updateMobileMenuToggle = () => {
		if ( ! mobileMenuToggle ) {
			return;
		}

		const currentLabel = mobileMenuToggle.getAttribute( 'aria-label' ) || '';
		const labelOpen = mobileMenuToggle.dataset.mobileMenuLabelOpen || mobileMenuToggle.dataset.reclaimMobileMenuLabelOpen || currentLabel;
		const labelClose = mobileMenuToggle.dataset.mobileMenuLabelClose || mobileMenuToggle.dataset.reclaimMobileMenuLabelClose || currentLabel;

		mobileMenuToggle.setAttribute( 'aria-expanded', String( mobileNavOpen ) );
		mobileMenuToggle.setAttribute( 'aria-label', mobileNavOpen ? labelClose : labelOpen );
	};

	const getMobileNavFocusableElements = () => {
		if ( ! mobileNav ) {
			return [];
		}

		return Array.from(
			mobileNav.querySelectorAll(
				'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])'
			)
		).filter( ( element ) => 0 < element.getClientRects().length );
	};

	const trapMobileNavFocus = ( event ) => {
		if ( 'Tab' !== event.key || ! mobileNavOpen || ! mobileNavMedia.matches ) {
			return;
		}

		const focusableElements = getMobileNavFocusableElements();
		const firstElement = focusableElements[ 0 ];
		const lastElement = focusableElements[ focusableElements.length - 1 ];

		if ( ! firstElement || ! lastElement || ! mobileMenuToggle ) {
			return;
		}

		if ( document.activeElement === mobileMenuToggle ) {
			event.preventDefault();
			( event.shiftKey ? lastElement : firstElement ).focus( { preventScroll: true } );
			return;
		}

		if ( event.shiftKey && document.activeElement === firstElement ) {
			event.preventDefault();
			mobileMenuToggle.focus( { preventScroll: true } );
			return;
		}

		if ( ! event.shiftKey && document.activeElement === lastElement ) {
			event.preventDefault();
			mobileMenuToggle.focus( { preventScroll: true } );
			return;
		}

		if ( ! focusableElements.includes( document.activeElement ) ) {
			event.preventDefault();
			firstElement.focus( { preventScroll: true } );
		}
	};

	const setMobileNavOpen = ( open, returnFocus = false ) => {
		if ( ! mobileMenuToggle || ! mobileNav || ! mobileNavBackdrop ) {
			return;
		}

		mobileNavOpen = Boolean( open && mobileNavMedia.matches );
		document.body.classList.toggle( 'mobile-nav-open', mobileNavOpen );
		mobileNav.setAttribute( 'aria-hidden', String( ! mobileNavOpen ) );
		mobileNavBackdrop.hidden = ! mobileNavOpen;
		applyModalSemantics( mobileNavOpen );
		updateMobileMenuToggle();

		if ( mobileNavOpen ) {
			const firstLink = mobileNav.querySelector( 'a, button' );
			if ( firstLink ) {
				window.setTimeout( () => {
					firstLink.focus( { preventScroll: true } );
				}, 60 );
			}
		} else if ( returnFocus && mobileMenuToggle ) {
			mobileMenuToggle.focus( { preventScroll: true } );
		}
	};

	const syncMobileNavMode = () => {
		if ( ! mobileMenuToggle || ! mobileNav || ! mobileNavBackdrop ) {
			return;
		}

		if ( mobileNavMedia.matches ) {
			if ( mobileNavBackdrop.parentNode !== document.body ) {
				document.body.appendChild( mobileNavBackdrop );
			}

			if ( mobileNav.parentNode !== document.body ) {
				document.body.appendChild( mobileNav );
			}

			mobileMenuToggle.hidden = false;
			mobileNav.setAttribute( 'aria-hidden', String( ! mobileNavOpen ) );
			mobileNavBackdrop.hidden = ! mobileNavOpen;
			updateMobileMenuToggle();
			return;
		}

		if ( mobileNavOriginalParent && mobileNav.parentNode !== mobileNavOriginalParent ) {
			mobileNavOriginalParent.insertBefore( mobileNav, mobileNavReferenceNode );
		}

		if ( mobileNavBackdropOriginalParent && mobileNavBackdrop.parentNode !== mobileNavBackdropOriginalParent ) {
			mobileNavBackdropOriginalParent.insertBefore( mobileNavBackdrop, mobileNavBackdropReferenceNode );
		}

		mobileNavOpen = false;
		mobileMenuToggle.hidden = true;
		mobileNav.removeAttribute( 'aria-hidden' );
		mobileNavBackdrop.hidden = true;
		document.body.classList.remove( 'mobile-nav-open' );
		applyModalSemantics( false );
		updateMobileMenuToggle();
	};

	const storedTheme = getStoredTheme();
	if ( 'dark' === storedTheme || 'light' === storedTheme ) {
		setTheme( storedTheme );
	} else {
		updateToggle();
	}

	if ( toggle ) {
		toggle.addEventListener( 'click', () => {
			setTheme( 'dark' === currentTheme() ? 'light' : 'dark', true );
		} );
	}

	if ( mobileMenuToggle && mobileNav && mobileNavBackdrop ) {
		mobileMenuToggle.addEventListener( 'click', () => {
			setMobileNavOpen( ! mobileNavOpen );
		} );

		mobileNavBackdrop.addEventListener( 'click', () => {
			setMobileNavOpen( false, true );
		} );

		mobileNav.addEventListener( 'click', ( event ) => {
			if ( event.target.closest( 'a' ) ) {
				setMobileNavOpen( false );
			}
		} );

		document.addEventListener( 'keydown', ( event ) => {
			if ( 'Escape' === event.key && mobileNavOpen ) {
				setMobileNavOpen( false, true );
				return;
			}

			trapMobileNavFocus( event );
		} );

		syncMobileNavMode();
	}

	const handleSystemThemeChange = () => {
		if ( ! getStoredTheme() ) {
			delete root.dataset.theme;
			updateToggle();
		}
	};

	if ( media.addEventListener ) {
		media.addEventListener( 'change', handleSystemThemeChange );
	} else if ( media.addListener ) {
		media.addListener( handleSystemThemeChange );
	}

	if ( mobileNavMedia.addEventListener ) {
		mobileNavMedia.addEventListener( 'change', syncMobileNavMode );
	} else if ( mobileNavMedia.addListener ) {
		mobileNavMedia.addListener( syncMobileNavMode );
	}
})();
