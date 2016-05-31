# The Maat Theme

Maat is a WordPress Theme.
 It was more or less developed during the *WordCamp in Aarhus 2016*. 
Several speakers mentioned tools such as SASS, Bower, Grunt and Eslint. 
I had to try these tools in one theme. 

* SASS / Compass
* Bower
* Bootstrap
* Jquery
* Eslint

## The Project Files

The libraries in bower_components/ were fetched via Bower. Here's a fast overview (made by tree in bash):

~~~~
.
├── 404.php
├── bower_components
│   ├── bootstrap
│   │   ├── bower.json
│   │   ├── CHANGELOG.md
│   │   ├── dist
│   │   │   ├── css
│   │   │   │   ├── bootstrap.css
│   │   │   │   ├── bootstrap.css.map
│   │   │   │   ├── bootstrap.min.css
│   │   │   │   ├── bootstrap.min.css.map
│   │   │   │   ├── bootstrap-theme.css
│   │   │   │   ├── bootstrap-theme.css.map
│   │   │   │   ├── bootstrap-theme.min.css
│   │   │   │   └── bootstrap-theme.min.css.map
│   │   │   ├── fonts
│   │   │   │   ├── glyphicons-halflings-regular.eot
│   │   │   │   ├── glyphicons-halflings-regular.svg
│   │   │   │   ├── glyphicons-halflings-regular.ttf
│   │   │   │   ├── glyphicons-halflings-regular.woff
│   │   │   │   └── glyphicons-halflings-regular.woff2
│   │   │   └── js
│   │   │       ├── bootstrap.js
│   │   │       ├── bootstrap.min.js
│   │   │       └── npm.js
│   │   ├── fonts
│   │   │   ├── glyphicons-halflings-regular.eot
│   │   │   ├── glyphicons-halflings-regular.svg
│   │   │   ├── glyphicons-halflings-regular.ttf
│   │   │   ├── glyphicons-halflings-regular.woff
│   │   │   └── glyphicons-halflings-regular.woff2
│   │   ├── grunt
│   │   │   ├── bs-commonjs-generator.js
│   │   │   ├── bs-glyphicons-data-generator.js
│   │   │   ├── bs-lessdoc-parser.js
│   │   │   ├── bs-raw-files-generator.js
│   │   │   ├── configBridge.json
│   │   │   └── sauce_browsers.yml
│   │   ├── Gruntfile.js
│   │   ├── js
│   │   │   ├── affix.js
│   │   │   ├── alert.js
│   │   │   ├── button.js
│   │   │   ├── carousel.js
│   │   │   ├── collapse.js
│   │   │   ├── dropdown.js
│   │   │   ├── modal.js
│   │   │   ├── popover.js
│   │   │   ├── scrollspy.js
│   │   │   ├── tab.js
│   │   │   ├── tooltip.js
│   │   │   └── transition.js
│   │   ├── less
│   │   │   ├── alerts.less
│   │   │   ├── badges.less
│   │   │   ├── bootstrap.less
│   │   │   ├── breadcrumbs.less
│   │   │   ├── button-groups.less
│   │   │   ├── buttons.less
│   │   │   ├── carousel.less
│   │   │   ├── close.less
│   │   │   ├── code.less
│   │   │   ├── component-animations.less
│   │   │   ├── dropdowns.less
│   │   │   ├── forms.less
│   │   │   ├── glyphicons.less
│   │   │   ├── grid.less
│   │   │   ├── input-groups.less
│   │   │   ├── jumbotron.less
│   │   │   ├── labels.less
│   │   │   ├── list-group.less
│   │   │   ├── media.less
│   │   │   ├── mixins
│   │   │   │   ├── alerts.less
│   │   │   │   ├── background-variant.less
│   │   │   │   ├── border-radius.less
│   │   │   │   ├── buttons.less
│   │   │   │   ├── center-block.less
│   │   │   │   ├── clearfix.less
│   │   │   │   ├── forms.less
│   │   │   │   ├── gradients.less
│   │   │   │   ├── grid-framework.less
│   │   │   │   ├── grid.less
│   │   │   │   ├── hide-text.less
│   │   │   │   ├── image.less
│   │   │   │   ├── labels.less
│   │   │   │   ├── list-group.less
│   │   │   │   ├── nav-divider.less
│   │   │   │   ├── nav-vertical-align.less
│   │   │   │   ├── opacity.less
│   │   │   │   ├── pagination.less
│   │   │   │   ├── panels.less
│   │   │   │   ├── progress-bar.less
│   │   │   │   ├── reset-filter.less
│   │   │   │   ├── reset-text.less
│   │   │   │   ├── resize.less
│   │   │   │   ├── responsive-visibility.less
│   │   │   │   ├── size.less
│   │   │   │   ├── tab-focus.less
│   │   │   │   ├── table-row.less
│   │   │   │   ├── text-emphasis.less
│   │   │   │   ├── text-overflow.less
│   │   │   │   └── vendor-prefixes.less
│   │   │   ├── mixins.less
│   │   │   ├── modals.less
│   │   │   ├── navbar.less
│   │   │   ├── navs.less
│   │   │   ├── normalize.less
│   │   │   ├── pager.less
│   │   │   ├── pagination.less
│   │   │   ├── panels.less
│   │   │   ├── popovers.less
│   │   │   ├── print.less
│   │   │   ├── progress-bars.less
│   │   │   ├── responsive-embed.less
│   │   │   ├── responsive-utilities.less
│   │   │   ├── scaffolding.less
│   │   │   ├── tables.less
│   │   │   ├── theme.less
│   │   │   ├── thumbnails.less
│   │   │   ├── tooltip.less
│   │   │   ├── type.less
│   │   │   ├── utilities.less
│   │   │   ├── variables.less
│   │   │   └── wells.less
│   │   ├── LICENSE
│   │   ├── nuget
│   │   │   ├── bootstrap.less.nuspec
│   │   │   ├── bootstrap.nuspec
│   │   │   └── MyGet.ps1
│   │   ├── package.js
│   │   ├── package.json
│   │   └── README.md
│   └── jquery
│       ├── AUTHORS.txt
│       ├── bower.json
│       ├── dist
│       │   ├── jquery.js
│       │   ├── jquery.min.js
│       │   └── jquery.min.map
│       ├── external
│       │   └── sizzle
│       │       ├── dist
│       │       │   ├── sizzle.js
│       │       │   ├── sizzle.min.js
│       │       │   └── sizzle.min.map
│       │       └── LICENSE.txt
│       ├── LICENSE.txt
│       ├── README.md
│       └── src
│           ├── ajax
│           │   ├── jsonp.js
│           │   ├── load.js
│           │   ├── parseJSON.js
│           │   ├── parseXML.js
│           │   ├── script.js
│           │   ├── var
│           │   │   ├── location.js
│           │   │   ├── nonce.js
│           │   │   └── rquery.js
│           │   └── xhr.js
│           ├── ajax.js
│           ├── attributes
│           │   ├── attr.js
│           │   ├── classes.js
│           │   ├── prop.js
│           │   ├── support.js
│           │   └── val.js
│           ├── attributes.js
│           ├── callbacks.js
│           ├── core
│           │   ├── access.js
│           │   ├── init.js
│           │   ├── parseHTML.js
│           │   ├── ready.js
│           │   └── var
│           │       └── rsingleTag.js
│           ├── core.js
│           ├── css
│           │   ├── addGetHookIf.js
│           │   ├── adjustCSS.js
│           │   ├── curCSS.js
│           │   ├── defaultDisplay.js
│           │   ├── hiddenVisibleSelectors.js
│           │   ├── showHide.js
│           │   ├── support.js
│           │   └── var
│           │       ├── cssExpand.js
│           │       ├── getStyles.js
│           │       ├── isHidden.js
│           │       ├── rmargin.js
│           │       ├── rnumnonpx.js
│           │       └── swap.js
│           ├── css.js
│           ├── data
│           │   ├── Data.js
│           │   └── var
│           │       ├── acceptData.js
│           │       ├── dataPriv.js
│           │       └── dataUser.js
│           ├── data.js
│           ├── deferred.js
│           ├── deprecated.js
│           ├── dimensions.js
│           ├── effects
│           │   ├── animatedSelector.js
│           │   └── Tween.js
│           ├── effects.js
│           ├── event
│           │   ├── ajax.js
│           │   ├── alias.js
│           │   ├── focusin.js
│           │   ├── support.js
│           │   └── trigger.js
│           ├── event.js
│           ├── exports
│           │   ├── amd.js
│           │   └── global.js
│           ├── intro.js
│           ├── jquery.js
│           ├── manipulation
│           │   ├── buildFragment.js
│           │   ├── _evalUrl.js
│           │   ├── getAll.js
│           │   ├── setGlobalEval.js
│           │   ├── support.js
│           │   ├── var
│           │   │   ├── rcheckableType.js
│           │   │   ├── rscriptType.js
│           │   │   └── rtagName.js
│           │   └── wrapMap.js
│           ├── manipulation.js
│           ├── offset.js
│           ├── outro.js
│           ├── queue
│           │   └── delay.js
│           ├── queue.js
│           ├── selector.js
│           ├── selector-native.js
│           ├── selector-sizzle.js
│           ├── serialize.js
│           ├── traversing
│           │   ├── findFilter.js
│           │   └── var
│           │       ├── dir.js
│           │       ├── rneedsContext.js
│           │       └── siblings.js
│           ├── traversing.js
│           ├── var
│           │   ├── arr.js
│           │   ├── class2type.js
│           │   ├── concat.js
│           │   ├── documentElement.js
│           │   ├── document.js
│           │   ├── hasOwn.js
│           │   ├── indexOf.js
│           │   ├── pnum.js
│           │   ├── push.js
│           │   ├── rcssNum.js
│           │   ├── rnotwhite.js
│           │   ├── slice.js
│           │   ├── support.js
│           │   └── toString.js
│           └── wrap.js
├── bower.json
├── config.rb
├── css
│   └── style.css
├── footer.php
├── functions.php
├── header.php
├── images
│   ├── ankh-md.png
│   ├── multimusen.png
│   ├── maat_100x.png
│   ├── maat_100x.xcf
│   └── maat.png
├── includes
│   └── wp_bootstrap_navwalker.php
├── index.php
├── js
│   ├── html5.js
│   └── menu.js
├── koala-config.json
├── LICENSE.txt
├── loop.php
├── menu.html
├── menu.php
├── README.md
├── sass
│   ├── style.scss
│   └── style.scss~
├── screenshot.png
├── sidebar.php
└── style.css

41 directories, 254 files
~~~~
