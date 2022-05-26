(function(w) {
    w.LightSlider = class {
        constructor(args){
            this.animEndEventName = 'animationend';
                this.component = args.container;
                this.items = this.component.querySelector( 'ul.itemwrap' ).children;
                this.current = 0;
                this.itemsCount = this.items.length;
                this.nav = this.component.querySelector( 'nav' );
                this.navNext = this.nav.querySelector( '.next' );
                this.navPrev = this.nav.querySelector( '.prev' );
                this.isAnimating = false;
            this.effectName = args.effectName || 'Soft scale';
            this.arrows = args.arrows || false;
            this.autoScroll = args.autoScroll || false;
                this.interval = args.interval || 5000;
                this.intervalId = 0;
            this.animationMap = {
                'Soft scale' : 'fxSoftScale',
                'Press away' : 'fxPressAway',
                'Side Swing' : 'fxSideSwing',
                'Fortune wheel' : 'fxFortuneWheel',
                'Swipe' : 'fxSwipe',
                'Push reveal' : 'fxPushReveal',
                'Snap in' : 'fxSnapIn',
                'Let me in' : 'fxLetMeIn',
                'Stick it' : 'fxStickIt',
                'Archive me' : 'fxArchiveMe',
                'Vertical growth' : 'fxVGrowth',
                'Slide Behind' : 'fxSlideBehind',
                'Soft Pulse' : 'fxSoftPulse',
                'Earthquake' : 'fxEarthquake',
                'Cliff diving' : 'fxCliffDiving',
            }
        }

        init() {
            this.pauseOnSlideHover();
            this.navNext.addEventListener( 'click', (evt) => {
                evt.preventDefault();
                this.navigate( 'next' );
            } );
            this.navPrev.addEventListener( 'click', (evt) => {
                evt.preventDefault();
                this.navigate( 'prev' );
            } );
            this.component.querySelector('li').classList.add('current');
            this.changeEffect();
            if (!this.arrows) {
                this.hideNav();
            }
            if (this.autoScroll){
                this.setAutoPlay();
            }
        }

        setAutoPlay(){
            this.intervalId =
                setInterval(()=>{
                    this.navigate( 'next' );
                }, this.interval)
        }

        resetAutoPlay(){
            clearInterval(this.intervalId);
            this.setAutoPlay();
        }

        pauseOnSlideHover(){
            this.component.addEventListener("mouseenter", ()=>{
                clearInterval(this.intervalId);
            });
            this.component.addEventListener("mouseleave", ()=>{
                this.resetAutoPlay();
            });
        }

        hideNav() {
            this.nav.style.display = 'none';
        }


        changeEffect() {
            this.component.classList.add(this.animationMap[this.effectName])
        }

        navigate (dir) {
            this.isAnimating = true;
            let cntAnims = 0;


            const currentItem = this.items[ this.current ];

            if( dir === 'next' ) {
                this.current = this.current < this.itemsCount - 1 ? this.current + 1 : 0;
            }
            else if( dir === 'prev' ) {
                this.current = this.current > 0 ? this.current - 1 : this.itemsCount - 1;
            }

            const nextItem = this.items[ this.current ];

            const onEndAnimationCurrentItem = function() {
                this.removeEventListener( this.animEndEventName, onEndAnimationCurrentItem );
                this.classList.remove('current' )
                this.classList.remove(dir === 'next' ? 'navOutNext' : 'navOutPrev' )
                ++cntAnims;
                if( cntAnims === 2 ) {
                    this.isAnimating = false;
                }
            }

            const onEndAnimationNextItem = function() {
                this.removeEventListener( this.animEndEventName, onEndAnimationNextItem );
                this.classList.add('current');
                this.classList.remove(dir === 'next' ? 'navInNext' : 'navInPrev' );
                ++cntAnims;
                if( cntAnims === 2 ) {
                    this.isAnimating = false;
                }
            }

            currentItem.addEventListener( this.animEndEventName, onEndAnimationCurrentItem );
            nextItem.addEventListener( this.animEndEventName, onEndAnimationNextItem );

            currentItem.classList.add(dir === 'next' ? 'navOutNext' : 'navOutPrev');
            nextItem.classList.add(dir === 'next' ? 'navInNext' : 'navInPrev');
        }
    }

    document.querySelectorAll('.light-slider').forEach((item)=>{
        new LightSlider({
            container: item,
            effectName : 'Push reveal',
            arrows : true,
            interval: 5000,
            autoScroll: true
        }).init();
    });


})(this);

