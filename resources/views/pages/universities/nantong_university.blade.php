@extends('layouts.app')
@section('content')

<link rel="stylesheet" type="text/css" href="css/stylesearch.css">

  <link rel="stylesheet" type="text/css" href="css/styleUniv.css">

  <style onload="NPRL.onLoadStyle(this)" onerror="NPRL.onErrorStyle(this)">
footer ul {
    list-style: none;
    padding: 0px;
}

footer a {
    color: #eee;
    text-decoration: none;
}

footer ul li.sub-header {
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #cecece;
    font-size: .75rem;
}

footer ul li {
    color: #eee;
    font-size: 14px;
    padding: 5px;
}

footer ul li img {
    margin-right: 10px;
}

footer ul li i {
    margin-right: 10px;
}

.info_slide_dots {
    bottom: 0px !important;
}

.show-less {
    height: 1.5em;
    overflow: hidden;
}

.show-less-lg {
    height: 9em;
    overflow: hidden;
}

.sp-layer {
    background: #fff;
}

.logo {
    width: 100px;
    height: 100px;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: "Lato", sans-serif;
}

.ca-card-title {
    padding-bottom: .5em;
    padding-right: 20px;
    display: inline-block;
    font-size: 20px;
}

article h3 {
    margin-bottom: .5em;
    margin-top: 1em;
}

a.nav-link:hover {
    color: #e10707;
}

h3 {
    font-weight: 700;
    color: #484848;
}

p {
    margin-bottom: .5em;
}

.mdc-card {
    background: #fff;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, .25);
}

.intro-headers {
    font-weight: 700;
    font-size: 16px;
}

.card-container p {
    margin-bottom: 0px;
    font-size: 12px;
}

.card-container {
    max-width: 232px;
}

.card-container .card-body {
    box-shadow: 0px 10px 16px rgba(0, 0, 0, .1), 0px 4px 6px rgba(0, 0, 0, .06);
    line-height: 14px;
}

.title {
    font-family: Lato;
    font-style: normal;
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
}

.question {
    border: 0 solid #d71f27;
    border-left-width: 2px !important;
}

.reply-btn {
    color: #d71f27;
}

.fa.checked {
    color: #efac4d;
}

.fa.unchecked {
    color: #dad8d4;
}

.review-types {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    grid-auto-columns: 1fr 1fr;
    grid-auto-rows: 1fr 1fr 1fr 1fr;
    grid-gap: 1em 1em;
}

.review-item {
    font-size: 12px;
}

.review-item .stars {
    font-size: 10px;
}

.sticky-nav {
    position: -webkit-sticky;
    position: sticky;
    top: 1.5em;
    margin: 0px !important;
}

.sidebar {
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
}

div#masonry {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    height: 100vw;
    max-height: 400px;
    font-size: 0;
    overflow-x: scroll;
}

div#masonry img {
    width: 33.3%;
}

@supports not (flex-wrap: wrap) {
    div#masonry {
        display: block;
    }

    div#masonry img {
        display: inline-block;
        vertical-align: top;
    }
}

.nav-pills .nav-link {
    font-weight: 700;
    color: #484848;
}

#navbar-sections .nav-link.active {
    color: #484848;
    background: #fff;
}

#campus-nav .nav-link.active {
    color: #e10707;
    background: #fff;
    font-weight: 700;
    flex-grow: 1;
    border-bottom: 1px solid;
}

#campus-nav .nav-link {
    color: #333;
    background: #fff;
    font-weight: 700;
    flex-grow: 1;
    min-width: max-content;
}

#campus-nav .nav {
    justify-content: space-between;
    height: 4rem;
    overflow-x: scroll;
    display: flex;
    flex-wrap: nowrap;
}

.navbar {
    background: #fff;
    box-shadow: 0px 1px 2px rgba(0, 0, 0, .05), 0px 1px 3px rgba(0, 0, 0, .1);
}

* {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.mdc-card__supporting-text {
    font-family: Lato, sans-serif;
    font-weight: 400;
    letter-spacing: 0;
    color: #333;
    font-size: 16px;
    line-height: 1.733 !important;
}

.divider {
    border-bottom-width: 1px !important;
    border-bottom-style: solid !important;
    border-bottom-color: #ebebeb !important;
}

.red-divider {
    border-bottom-width: 5px !important;
    border-bottom-style: solid !important;
    border-bottom-color: #d71f27 !important;
}

.section-header,
.steps-header,
.steps-name {
    color: #e10707;
    font-weight: 400;
    font-size: 1.4em;
}

.steps-header {
    margin-bottom: 20px;
    text-align: center;
}

.steps-timeline {
    outline: 1px dashed rgba(255, 0, 0, 0);
}

@media screen and (max-width: 500px) {
    .steps-timeline {
        border-left: 2px solid #e10707;
        margin-left: 25px;
    }
}

@media screen and (min-width: 500px) {
    .steps-timeline {
        border-top: 2px solid #e10707;
        padding-top: 20px;
        margin-top: 40px;
        margin-left: 10%;
        margin-right: 10%;
    }
}

.steps-timeline:after {
    content: "";
    display: table;
    clear: both;
}

.steps-one,
.steps-two,
.steps-three {
    outline: 1px dashed rgba(0, 128, 0, 0);
}

@media screen and (max-width: 500px) {

    .steps-one,
    .steps-two,
    .steps-three {
        margin-left: -25px;
    }
}

@media screen and (min-width: 500px) {

    .steps-one,
    .steps-two,
    .steps-three {
        float: left;
        width: 33%;
        margin-top: -50px;
    }
}

@media screen and (max-width: 500px) {

    .steps-one,
    .steps-two {
        padding-bottom: 40px;
    }
}

@media screen and (min-width: 500px) {
    .steps-one {
        margin-left: -16.65%;
        margin-right: 16.65%;
    }
}

@media screen and (max-width: 500px) {
    .steps-three {
        margin-bottom: -100%;
    }
}

@media screen and (min-width: 500px) {
    .steps-three {
        margin-left: 16.65%;
        margin-right: -16.65%;
    }
}

.steps-img {
    display: block;
    margin: auto;
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

@media screen and (max-width: 500px) {
    .steps-img {
        float: left;
        margin-right: 20px;
    }
}

.steps-name,
.steps-description {
    margin: 0;
}

@media screen and (min-width: 500px) {
    .steps-name {
        text-align: center;
    }
}

.steps-description {
    overflow: hidden;
}

@media screen and (min-width: 500px) {
    .steps-description {
        text-align: center;
    }
}

.ca-button {
    --mdc-dialog-dark-theme-bg-color: #303030;
    --mdc-persistent-drawer-dark-theme-bg-color: #212121;
    --mdc-permanent-drawer-dark-theme-bg-color: #212121;
    --mdc-theme-background: #fff;
    --mdc-theme-text-primary-on-primary: white;
    --mdc-theme-text-secondary-on-primary: rgba(255, 255, 255, .7);
    --mdc-theme-text-hint-on-primary: rgba(255, 255, 255, .5);
    --mdc-theme-text-disabled-on-primary: rgba(255, 255, 255, .5);
    --mdc-theme-text-icon-on-primary: rgba(255, 255, 255, .5);
    --mdc-theme-text-primary-on-accent: white;
    --mdc-theme-text-secondary-on-accent: rgba(255, 255, 255, .7);
    --mdc-theme-text-hint-on-accent: rgba(255, 255, 255, .5);
    --mdc-theme-text-disabled-on-accent: rgba(255, 255, 255, .5);
    --mdc-theme-text-icon-on-accent: rgba(255, 255, 255, .5);
    --mdc-theme-text-primary-on-background: rgba(0, 0, 0, .87);
    --mdc-theme-text-secondary-on-background: rgba(0, 0, 0, .54);
    --mdc-theme-text-hint-on-background: rgba(0, 0, 0, .38);
    --mdc-theme-text-disabled-on-background: rgba(0, 0, 0, .38);
    --mdc-theme-text-icon-on-background: rgba(0, 0, 0, .38);
    --mdc-theme-text-primary-on-light: rgba(0, 0, 0, .87);
    --mdc-theme-text-secondary-on-light: rgba(0, 0, 0, .54);
    --mdc-theme-text-hint-on-light: rgba(0, 0, 0, .38);
    --mdc-theme-text-disabled-on-light: rgba(0, 0, 0, .38);
    --mdc-theme-text-icon-on-light: rgba(0, 0, 0, .38);
    --mdc-theme-text-primary-on-dark: white;
    --mdc-theme-text-secondary-on-dark: rgba(255, 255, 255, .7);
    --mdc-theme-text-hint-on-dark: rgba(255, 255, 255, .5);
    --mdc-theme-text-disabled-on-dark: rgba(255, 255, 255, .5);
    --mdc-theme-text-icon-on-dark: rgba(255, 255, 255, .5);
    --mdc-theme-primary: #d71f27;
    --mdc-theme-accent: #ffd54f;
    white-space: nowrap;
    font-family: Lato, sans-serif;
    -webkit-font-smoothing: antialiased;
    letter-spacing: .04em;
    display: inline-block;
    position: relative;
    height: 36px;
    padding: 0 16px;
    border: none;
    border-radius: 2px;
    outline: none;
    background: transparent;
    font-size: 14px;
    font-weight: 600;
    line-height: 36px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    vertical-align: middle;
    user-select: none;
    box-sizing: border-box;
    -webkit-appearance: none;
    box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, .2), 0px 2px 2px 0px rgba(0, 0, 0, .14), 0px 1px 5px 0px rgba(0, 0, 0, .12);
    transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
    direction: ltr;
    --mdc-ripple-surface-width: 0;
    --mdc-ripple-surface-height: 0;
    --mdc-ripple-fg-size: 0;
    --mdc-ripple-left: 0;
    --mdc-ripple-top: 0;
    --mdc-ripple-fg-scale: 1;
    --mdc-ripple-fg-translate-end: 0;
    --mdc-ripple-fg-translate-start: 0;
    will-change: transform, opacity;
    -webkit-tap-highlight-color: transparent;
    background-color: var(--mdc-theme-primary, #3f51b5);
    color: var(--mdc-theme-text-primary-on-primary, white);
    margin: 0 8px 0 0;
    margin-left: 0;
    margin-right: 0;
    right: 0;
    width: 100%;
}

.lightbox {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    display: none;
    background: #7f8c8d;
    perspective: 1000;
}

.filter {
    position: absolute;
    width: 100%;
    height: 100%;
    filter: blur(20px);
    opacity: .5;
    background-position: center;
    background-size: cover;
}

.lightbox img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotateY(0deg);
    max-height: 95vh;
    max-width: calc(95vw - 100px);
    transition: .8s cubic-bezier(.7, 0, .4, 1);
    transform-style: preserve-3d;
}

.slider-pro img {
    width: 100%;
    cursor: pointer;
}

.star-field {
    display: flex;
}

.star-rating-wrapper {
    display: flex;
    margin-bottom: 1rem;
}

.rating-score {
    margin-left: 1em;
    color: #d71f27;
    font-weight: 700;
}

.jq-stars {
    display: inline-block;
}

.jq-rating-label {
    font-size: 22px;
    display: inline-block;
    position: relative;
    vertical-align: top;
    font-family: helvetica, arial, verdana;
}

.jq-star {
    width: 100px;
    height: 100px;
    display: inline-block;
    cursor: pointer;
}

.jq-star-svg {
    padding-left: 3px;
    width: 100%;
    height: 100%;
}

.jq-star:hover .fs-star-svg path {}

.jq-star-svg path {
    stroke-linejoin: round;
}

.jq-shadow {
    -webkit-filter: drop-shadow(-2px -2px 2px #888);
    filter: drop-shadow(-2px -2px 2px #888);
}

.program-ratings .jq-star {
    cursor: default;
}

.mdc-card__supporting-text,
p,
h3,
h2,
h1,
h4,
span,
label,
div,
strong,
small {
    font-family: Lato, sans-serif;
}

.mdc-select {
    width: 100%;
    max-width: 100%;
}

.animation-ctn {
    text-align: center;
    margin-top: 5em;
}

@-webkit-keyframes checkmark {
    0% {
        stroke-dashoffset: 100px;
    }

    100% {
        stroke-dashoffset: 200px;
    }
}

@-ms-keyframes checkmark {
    0% {
        stroke-dashoffset: 100px;
    }

    100% {
        stroke-dashoffset: 200px;
    }
}

@keyframes checkmark {
    0% {
        stroke-dashoffset: 100px;
    }

    100% {
        stroke-dashoffset: 0px;
    }
}

@-webkit-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 480px;
    }

    100% {
        stroke-dashoffset: 960px;
    }
}

@-ms-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px;
    }

    100% {
        stroke-dashoffset: 480px;
    }
}

@keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 480px;
    }

    100% {
        stroke-dashoffset: 960px;
    }
}

@keyframes colored-circle {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 100;
    }
}

.inlinesvg .svg svg {
    display: inline;
}

.icon--order-success svg polyline {
    -webkit-animation: checkmark .25s ease-in-out .7s backwards;
    animation: checkmark .25s ease-in-out .7s backwards;
}

.icon--order-success svg circle {
    -webkit-animation: checkmark-circle .6s ease-in-out backwards;
    animation: checkmark-circle .6s ease-in-out backwards;
}

.icon--order-success svg circle#colored {
    -webkit-animation: colored-circle .6s ease-in-out .7s backwards;
    animation: colored-circle .6s ease-in-out .7s backwards;
}

.grid-image {
    width: 273px;
    height: 170px;
    float: left;
    -webkit-box-shadow: 0 0 5px 0 #ccc;
    box-shadow: 0 0 5px 0 #ccc;
    justify-content: center;
    align-content: center;
    display: flex;
}

.accomodation-images::-webkit-scrollbar {
    -webkit-appearance: none;
}

.accomodation-images::-webkit-scrollbar:vertical {
    width: 11px;
}

.accomodation-images::-webkit-scrollbar:horizontal {
    height: 11px;
}

.accomodation-images::-webkit-scrollbar-thumb {
    border-radius: 8px;
    border: 2px solid white;
    background-color: rgba(0, 0, 0, .5);
}

.ca-card-title-three-lines {
    height: 75px;
    width: auto;
    overflow: hidden;
}

.ca-card-title-two-lines {
    height: 50px;
    width: auto;
    overflow: hidden;
}

.embed-responsive .card-img-top {
    object-fit: cover;
}

@media screen and (max-width: 500px) {
    .w-sm-auto {
        width: auto !important;
    }
}

.non-valid-req :not(a)::before {
    font-family: "Font Awesome 5 Free";
    content: "";
    margin-right: 5px;
    display: inline-block;
    color: #dc3545;
}

.valid-req :not(a)::before {
    font-family: "Font Awesome 5 Free";
    content: "";
    margin-right: 5px;
    display: inline-block;
    color: #28a745;
}

.valid-req,
.non-valid-req {
    display: flex;
}

.show-more-btn {
    color: #484848;
    font-weight: 700;
    width: 100%;
    display: flex;
    position: absolute;
    bottom: 0px;
    justify-content: center;
    padding-top: 35px;
    background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 70%);
    background: -moz-linear-gradient(rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 70%);
    background: -o-linear-gradient(rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 70%);
    background: linear-gradient(rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 70%);
}

.show-less-btn {
    color: #484848;
    width: 100%;
    font-weight: 700;
}

@media only screen and (max-width:768px) {
    #navbar-sections .nav {
        height: 3rem;
        display: flex;
        overflow-x: scroll;
    }

    .program-ratings .rating-left {
        display: flex;
        justify-content: space-between;
    }

    .ca-card-title-two-lines,
    .ca-card-title-three-lines {
        height: auto;
    }

    .wordpress-posts .card {
        width: auto !important;
        max-width: 100% !important;
    }

    #introduction .row {
        display: flex;
    }
}

.strong-rating {
    display: inline-block;
    border: 0;
}

.strong-rating span.star {
    display: inline-block;
    margin: 0;
    max-height: none;
    max-width: none;
    padding: 0;
}

.strong-rating span.star:before {
    content: "";
    -webkit-mask: url("https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/apply.china-admissions.com/static/assets/star-solid.svg") center center no-repeat;
    mask: url("https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/apply.china-admissions.com/static/assets/star-solid.svg") center center no-repeat;
    display: inline-block;
    font-size: 1.25em;
    width: 19px;
    height: 20px;
    padding: 0 4px;
    transition: color .3s ease;
    color: #ffb900;
    background: #ffb900;
}

.showmore_content {
    position: relative;
    overflow: hidden;
}

.showmore_trigger {
    width: 100%;
    width: 95%;
    cursor: pointer;
    color: #484848;
    font-weight: 700;
    display: flex;
    bottom: 0px;
    justify-content: center;
}

.showmore_trigger span {
    display: block;
}

.zsiq_cnt {
    display: none !important;
}

.upvote,
.downvote {
    color: #c4c4c4;
}

.upvote:hover,
.downvote:hover {
    color: #d71f27;
    cursor: pointer;
}

.pagination li a {
    min-width: 30px;
    height: 28px;
    line-height: 28px;
    display: block;
    background: #fff;
    font-size: 14px;
    color: #333;
    text-decoration: none;
    text-align: center;
}

.pagination li.active a {
    height: 30px;
    line-height: 30px;
    background: #aaa;
    color: #fff;
}

.vote-count span {
    line-height: 1;
}

article a {
    color: #d71f27;
}

.author {
    color: #565959 !important;
}

.userQuestion {
    color: #560c10;
}

.school-content {
    margin-top: -8rem;
    background: #fff;
    padding: 1.5rem;
    box-shadow: 0 4px 8px rgba(63, 92, 110, 15%);
    border-radius: .5rem;
    border-top: 0;
    z-index: 999;
    position: relative;
}

.school-page-logo {
    margin-top: -5rem;
    background: #fff;
    padding: 1rem;
    box-shadow: 0 4px 8px rgba(63, 92, 110, 15%);
    border-radius: .5rem;
    border-top: 0;
    z-index: 999;
    position: relative;
    width: 130px;
}

.mdc-card__supporting-text,
p,
h3,
h2,
h1,
h4,
span,
label,
div,
strong,
small {
    font-family: Lato, sans-serif;
}

body>header {
    position: relative;
    z-index: 50;
    padding-right: 1.5em;
    background-color: var(--mdc-theme-primary);
}

body>main {
    padding: 1.5em 0;
    z-index: 5;
    flex: 1;
}

body>footer {
    flex: 0;
}

body>footer .legal {
    height: 56px;
    background-color: #282a2b;
    color: #e5e0e0;
}

body>footer .legal p {
    font-size: 70%;
}

body>footer .legal__links {
    float: right;
}

body>footer>* {
    padding-left: 1.5em;
    padding-right: 1.5em;
}

body>footer .secondary-nav {
    box-shadow: rgba(0, 0, 0, .3) 0 10px 20px -10px inset;
}

body>footer .footer-message {
    background-color: var(--mdc-theme-accent);
    margin-right: 1.5em;
    margin-left: 1.5em;
    line-height: 1.4;
    font-size: 94%;
}

body>footer .promo-links p,
body>footer .sitemap {
    color: white;
}

body>footer .promo-links {
    background-color: #777;
}

.mdc-typography {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

.mdc-typography--headline {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: 1.5rem;
    font-weight: 400;
    letter-spacing: normal;
    line-height: 2rem;
}

.mdc-typography--adjust-margin.mdc-typography--headline {
    margin: -.5rem 0 1rem -.06em;
}

.mdc-typography--title {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: 1.25rem;
    font-weight: 500;
    letter-spacing: .02em;
    line-height: 2rem;
}

.mdc-typography--adjust-margin.mdc-typography--title {
    margin: -.5rem 0 1rem -.05em;
}

.mdc-typography--subheading2 {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: 1rem;
    font-weight: 400;
    letter-spacing: .04em;
    line-height: 1.75rem;
}

.mdc-typography--subheading1 {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: .938rem;
    font-weight: 400;
    letter-spacing: .04em;
    line-height: 1.5rem;
}

.mdc-typography--adjust-margin.mdc-typography--subheading1 {
    margin: -.313rem 0 .813rem -.06em;
}

.mdc-typography--body2 {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: .875rem;
    font-weight: 500;
    letter-spacing: .04em;
    line-height: 1.5rem;
}

.mdc-typography--adjust-margin.mdc-typography--body2 {
    margin: -.25rem 0 .75rem 0;
}

.mdc-typography--body1 {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: .875rem;
    font-weight: 400;
    letter-spacing: .04em;
    line-height: 1.25rem;
}

.mdc-typography--adjust-margin.mdc-typography--body1 {
    margin: -.25rem 0 .75rem 0;
}

.mdc-typography--caption {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: .75rem;
    font-weight: 400;
    letter-spacing: .08em;
    line-height: 1.25rem;
}

.mdc-typography--adjust-margin.mdc-typography--caption {
    margin: -.5rem 0 1rem -.04em;
}

.mdc-typography {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

.mdc-typography--adjust-margin.mdc-typography--headline {
    margin: -.5rem 0 1rem -.06em;
}

.mdc-typography--title {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: 1.25rem;
    font-weight: 500;
    letter-spacing: .02em;
    line-height: 2rem;
}

.mdc-typography--adjust-margin.mdc-typography--title {
    margin: -.5rem 0 1rem -.05em;
}

.mdc-typography--subheading2 {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: 1rem;
    font-weight: 400;
    letter-spacing: .04em;
    line-height: 1.75rem;
}

.mdc-typography--subheading1 {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: .938rem;
    font-weight: 400;
    letter-spacing: .04em;
    line-height: 1.5rem;
}

.mdc-typography--adjust-margin.mdc-typography--subheading1 {
    margin: -.313rem 0 .813rem -.06em;
}

.mdc-typography--body2 {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: .875rem;
    font-weight: 500;
    letter-spacing: .04em;
    line-height: 1.5rem;
}

.mdc-typography--body1 {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: .875rem;
    font-weight: 400;
    letter-spacing: .04em;
    line-height: 1.25rem;
}

.mdc-typography--caption {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: .75rem;
    font-weight: 400;
    letter-spacing: .08em;
    line-height: 1.25rem;
}

.mdc-typography--adjust-margin.mdc-typography--caption {
    margin: -.5rem 0 1rem -.04em;
}

.mdc-list--dense {
    padding-top: 4px;
    font-size: .812rem;
}

.contact-info span {
    display: block;
    margin-bottom: .25em;
}

body>footer .contact-info a,
body>footer .contact-info a:link,
body>footer .contact-info a:visited,
body>footer .contact-info a:hover {
    color: white;
}

nav.footer-nav {
    display: flex;
    flex-flow: row wrap;
    align-items: flex-end;
    justify-content: stretch;
}

nav.footer-nav>section {
    padding: 0 1em 0 0;
    margin: .5em 1em .5em 0;
    min-width: 10em;
}

.footer-nav__brand-links {
    position: relative;
    top: .2em;
}

.brand-links__social {
    margin-top: 1em;
}

.brand-links__social a,
.brand-links__social a:link,
.brand-links__social a:visited,
.brand-links__social a:hover {
    color: #444;
}

.brand-links__logo {
    position: relative;
    left: -1.5em;
    top: .25em;
}

.footer-nav__sitemap {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
}

@media (min-width: 479px) {
    nav.secondary-nav>section {
        flex-basis: 45%;
    }
}

nav.footer-nav>section p {
    margin-top: 0;
}

body>footer .sitemap {
    box-shadow: rgba(0, 0, 0, .3) 0 10px 20px -10px inset;
    background-color: #555;
    align-items: flex-start;
    justify-content: flex-start;
    padding-bottom: 2em;
}

body>footer .sitemap a:hover {
    text-decoration: underline;
}

nav.sitemap>section,
.sitemap__nav {
    margin: 0;
    padding: 0;
    margin-right: 1em;
}

.sitemap__nav__header {
    margin-bottom: .75em;
}

body>footer .sitemap__nav ul {
    margin: 0;
    padding: 0;
}

body>footer .sitemap__nav ul li.mdc-list-item {
    list-style-type: none;
    padding-left: 0;
    margin-left: 0;
    height: auto;
}

body>footer .sitemap__nav a,
body>footer .sitemap__nav a:link,
body>footer .sitemap__nav a:visited,
body>footer .sitemap__nav a:hover {
    color: white;
}

.mdc-list {
    font-family: Lato, sans-serif;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-size: 1rem;
    font-weight: 400;
    letter-spacing: .04em;
    line-height: 1.75rem;
    line-height: 1.5rem;
    color: rgba(0, 0, 0, .87);
    color: var(--mdc-theme-text-primary-on-background, rgba(0, 0, 0, .87));
    margin: 0;
    padding: 8px 16px 0;
    list-style-type: none;
}

.mdc-list--theme-dark,
.mdc-theme--dark .mdc-list {
    color: white;
    color: var(--mdc-theme-text-primary-on-dark, white);
}

.mdc-list--dense {
    padding-top: 4px;
    font-size: .812rem;
}

.mdc-list-item {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    height: 48px;
}

.mdc-list-item__text {
    display: inline-flex;
    flex-direction: column;
}

.mdc-list--dense .mdc-list-item {
    height: 40px;
}

a.mdc-list-item {
    color: inherit;
    text-decoration: none;
}

.mdc-list-group .mdc-list {
    padding: 0;
}

li.mdc-list-item a:hover {
    color: white !important;
}

.sitemap {
    box-shadow: rgba(0, 0, 0, .3) 0 10px 20px -10px inset;
    background-color: #555;
    align-items: flex-start;
    justify-content: flex-start;
    padding-bottom: 2em;
}

.footer-nav {
    margin-top: 50px;
    background-color: #555;
    width: 100vw;
    height: auto;
    position: static;
    top: auto;
    z-index: auto;
    overflow: visible;
    font-family: Lato, Helvetica, Arial, sans-serif;
}

.sitemap__nav,
.footer-nav__brand-links,
.footer-nav__sitemap {
    display: inline-block;
    color: white;
}

ul.mdc-list--dense li a,
section.footer-nav__brand-links section span a {
    color: white;
}

.brand-links__logo {
    height: auto;
    width: auto;
}

nav.sitemap>section,
.sitemap__nav {
    margin: 0;
    padding: 0;
    margin-right: 1em;
}

.itemPool {
    text-align: center;
    padding-bottom: 100px;
}

.item {
    position: relative;
    background-color: #fff;
    margin: 0 auto 20px;
    border-radius: 5px;
    padding: 2% 3%;
    cursor: pointer;
    text-align: left;
    overflow: hidden;
}

.item:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, .05);
}

.item .uniLogo {
    display: inline-block;
    margin: 10px 15px 10px 0;
}

.item .mainContentArea {
    display: inline-block;
    vertical-align: top;
    width: calc(100% - 300px);
    min-width: 295px;
    background: #fff;
    position: relative;
}

.item .mainContentArea .title {
    font-size: 1.5rem;
    font-weight: 700;
    padding-top: 8px;
    line-height: 1.5rem;
}

.item .mainContentArea .spec {
    font-size: .8rem;
    margin-bottom: 10px;
    margin-top: 5px;
}

.item .mainContentArea .spec span {
    color: #888;
}

.item .mainContentArea .details {
    display: block;
}

.item .mainContentArea .details .detail {
    display: inline-block;
    vertical-align: top;
    margin: 5px 20px 0 0;
}

.item .mainContentArea .details .detail .name {
    color: #888;
    font-size: .6rem;
}

.item .mainContentArea .details .detail .number {
    font-size: 1.3rem;
    font-weight: 700;
    display: inline-block;
    text-transform: uppercase;
}

.item .mainContentArea .details .detail .unit {
    font-size: .5rem;
    display: inline-block;
}

.item .mainContentArea .details .detail .year {
    font-size: .8rem;
    font-weight: 700;
    display: inline-block;
}

.item .actionArea {
    background-color: #fafafa;
    width: 200px;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    text-align: center;
}

.item .actionArea .deadline {
    color: #555;
    font-size: .8rem;
    margin: 15px auto 5px;
}

.item .actionArea .deadline .date {
    font-size: 1.5rem;
    font-weight: 700;
}

.item .actionArea .button {
    display: inline-block;
}

.likeOrShare {
    text-align: right;
    height: 35px;
    padding: 10px 15px;
}

.likeOrShare.onlyOnMobile {
    position: relative;
    top: 0;
    padding: 0;
    height: 20px;
}

.likeOrShare i {
    cursor: pointer;
    font-size: 18px;
    margin-left: 10px;
}

.likeOrShare i.fa-heart:hover {
    color: #f55247;
}

.likeOrShare i.fa-share:hover {
    color: #6dc067;
}

@media only screen and (max-width: 1020px) {
    .item .mainContentArea {
        padding: 2% 3%;
        width: calc(100% - 200px);
    }

    .item .mainContentArea .title {
        padding-top: 2%;
    }
}

@media only screen and (max-width: 768px) {
    .item .uniLogo {
        display: flex;
    }

    .item .mainContentArea {
        display: block;
        width: 100% !important;
        min-width: 100% !important;
    }

    .item .actionArea {
        display: none;
    }
}

.contentWrapper {
    text-align: center;
    padding: 2.5% 3% 50px;
    max-width: 500px;
    margin: auto;
}

.contentWrapper h2 {
    font-size: 18px;
    color: rgba(48, 69, 92, .8);
    margin-bottom: 30px;
    font-weight: 500;
}

.contentWrapper .button {
    max-width: 280px;
    text-transform: uppercase;
}

.applicationList_wrapper {
    text-align: center;
}

.applicationList_wrapper .itemList {
    margin: 20px auto;
}

.applicationList_wrapper .itemList .item .mainContentArea .spec {
    color: rgba(48, 69, 92, .8);
}

@media only screen and (max-width: 1020px) {
    .applicationList_wrapper.block {
        background-color: transparent;
        box-shadow: none;
        margin-top: 30px;
    }

    .applicationList_wrapper.block hr {
        display: none;
    }
}

@media only screen and (max-width: 900px) {
    .applicationStatus_wrapper .topPart {
        padding-bottom: 180px;
    }

    .stepsWrapper {
        position: absolute;
        left: 0;
        right: 0;
    }
}

.column {
    width: 31%;
    margin: 0px .5%;
    display: inline-block;
    vertical-align: top;
}

.column.x2 {
    width: 62%;
    margin: 30px 1%;
}

.column.x5050 {
    width: 47.5%;
    margin: 10px 1%;
}

.column.center {
    display: block;
    margin: 10px auto;
}

.button {
    border-radius: 100px;
    border: 1px solid white;
    font-size: 1.3rem;
    font-weight: 100;
    padding: 8px;
    min-width: 150px;
    max-width: 200px;
    margin: auto 0;
    text-align: center;
    cursor: pointer;
}

.item-footer {
    justify-content: space-between;
}

.button:hover {
    background-color: #fff;
    color: rgba(48, 69, 92, .8);
}

.button.sml {
    font-size: 1rem;
    padding: 6px;
}

.button.black_on_white {
    border: 1px solid #555;
}

.button.black_on_white:hover {
    background-color: rgba(48, 69, 92, .8);
    color: white;
}

.button.red {
    border: 1px solid #f55247;
    color: #f55247;
}

.button.red:hover {
    background-color: #f55247;
    color: #fff;
}

.button.red.solid {
    background-color: #f55247;
    color: #fff;
}

.button.red.solid:hover {
    text-decoration: none;
    opacity: .8;
}

.button.green {
    border: 1px solid #6dc067;
    color: #6dc067;
}

.button.green:hover {
    background-color: #6dc067;
    color: #fff;
}

.button.green.solid {
    background-color: #6dc067;
    color: #fff;
}

.button.green.solid:hover {
    opacity: .8;
}

@media only screen and (max-width: 600px) {
    .content {
        border: 10px solid #f3f4f5;
        border-top: 60px solid #f3f4f5;
    }

    .menu-toggle {
        right: 10px;
    }

    .logo_onNav {
        margin: 11px 10px;
    }

    .column {
        width: calc(100% - 20px);
        margin: 10px;
    }

    .column.x2 {
        width: calc(100% - 20px);
        margin: 10px;
    }

    .column.x5050 {
        width: calc(100% - 20px);
        margin: 10px;
    }
}

footer .top ul li.sub-header {
    font-size: .75rem !important;
}

.has-text-white {
    color: white !important;
}

footer .top {
    background-color: #fff;
}

footer .top a {
    color: #4d4d4d !important;
}

footer .top .sub-header {
    color: #4d4d4d !important;
    font-size: 16px !important;
    font-weight: 800;
}

.column {
    display: block;
    flex-basis: 0;
    flex-grow: 1;
    flex-shrink: 1;
    padding: .75rem;
}

@media screen and (max-width: 768px) {
    .column.is-narrow-mobile {
        flex: none;
    }

    .column.is-full-mobile {
        flex: none;
        width: 100%;
    }

    .column.is-three-quarters-mobile {
        flex: none;
        width: 75%;
    }

    .column.is-two-thirds-mobile {
        flex: none;
        width: 66.6666%;
    }

    .column.is-half-mobile {
        flex: none;
        width: 50%;
    }

    .column.is-one-third-mobile {
        flex: none;
        width: 33.3333%;
    }

    .column.is-one-quarter-mobile {
        flex: none;
        width: 25%;
    }

    .column.is-one-fifth-mobile {
        flex: none;
        width: 20%;
    }

    .column.is-two-fifths-mobile {
        flex: none;
        width: 40%;
    }

    .column.is-three-fifths-mobile {
        flex: none;
        width: 60%;
    }

    .column.is-four-fifths-mobile {
        flex: none;
        width: 80%;
    }

    .column.is-offset-three-quarters-mobile {
        margin-left: 75%;
    }

    .column.is-offset-two-thirds-mobile {
        margin-left: 66.6666%;
    }

    .column.is-offset-half-mobile {
        margin-left: 50%;
    }

    .column.is-offset-one-third-mobile {
        margin-left: 33.3333%;
    }

    .column.is-offset-one-quarter-mobile {
        margin-left: 25%;
    }

    .column.is-offset-one-fifth-mobile {
        margin-left: 20%;
    }

    .column.is-offset-two-fifths-mobile {
        margin-left: 40%;
    }

    .column.is-offset-three-fifths-mobile {
        margin-left: 60%;
    }

    .column.is-offset-four-fifths-mobile {
        margin-left: 80%;
    }

    .column.is-1-mobile {
        flex: none;
        width: 8.33333%;
    }

    .column.is-offset-1-mobile {
        margin-left: 8.33333%;
    }

    .column.is-2-mobile {
        flex: none;
        width: 16.66667%;
    }

    .column.is-offset-2-mobile {
        margin-left: 16.66667%;
    }

    .column.is-3-mobile {
        flex: none;
        width: 25%;
    }

    .column.is-offset-3-mobile {
        margin-left: 25%;
    }

    .column.is-4-mobile {
        flex: none;
        width: 33.33333%;
    }

    .column.is-offset-4-mobile {
        margin-left: 33.33333%;
    }

    .column.is-5-mobile {
        flex: none;
        width: 41.66667%;
    }

    .column.is-offset-5-mobile {
        margin-left: 41.66667%;
    }

    .column.is-6-mobile {
        flex: none;
        width: 50%;
    }

    .column.is-offset-6-mobile {
        margin-left: 50%;
    }

    .column.is-7-mobile {
        flex: none;
        width: 58.33333%;
    }

    .column.is-offset-7-mobile {
        margin-left: 58.33333%;
    }

    .column.is-8-mobile {
        flex: none;
        width: 66.66667%;
    }

    .column.is-offset-8-mobile {
        margin-left: 66.66667%;
    }

    .column.is-9-mobile {
        flex: none;
        width: 75%;
    }

    .column.is-offset-9-mobile {
        margin-left: 75%;
    }

    .column.is-10-mobile {
        flex: none;
        width: 83.33333%;
    }

    .column.is-offset-10-mobile {
        margin-left: 83.33333%;
    }

    .column.is-11-mobile {
        flex: none;
        width: 91.66667%;
    }

    .column.is-offset-11-mobile {
        margin-left: 91.66667%;
    }

    .column.is-12-mobile {
        flex: none;
        width: 100%;
    }

    .column.is-offset-12-mobile {
        margin-left: 100%;
    }
}

@media screen and (min-width: 769px),
print {

    .column.is-narrow,
    .column.is-narrow-tablet {
        flex: none;
    }

    .column.is-full,
    .column.is-full-tablet {
        flex: none;
        width: 100%;
    }

    .column.is-three-quarters,
    .column.is-three-quarters-tablet {
        flex: none;
        width: 75%;
    }

    .column.is-two-thirds,
    .column.is-two-thirds-tablet {
        flex: none;
        width: 66.6666%;
    }

    .column.is-half,
    .column.is-half-tablet {
        flex: none;
        width: 50%;
    }

    .column.is-one-third,
    .column.is-one-third-tablet {
        flex: none;
        width: 33.3333%;
    }

    .column.is-one-quarter,
    .column.is-one-quarter-tablet {
        flex: none;
        width: 25%;
    }

    .column.is-one-fifth,
    .column.is-one-fifth-tablet {
        flex: none;
        width: 20%;
    }

    .column.is-two-fifths,
    .column.is-two-fifths-tablet {
        flex: none;
        width: 40%;
    }

    .column.is-three-fifths,
    .column.is-three-fifths-tablet {
        flex: none;
        width: 60%;
    }

    .column.is-four-fifths,
    .column.is-four-fifths-tablet {
        flex: none;
        width: 80%;
    }

    .column.is-offset-three-quarters,
    .column.is-offset-three-quarters-tablet {
        margin-left: 75%;
    }

    .column.is-offset-two-thirds,
    .column.is-offset-two-thirds-tablet {
        margin-left: 66.6666%;
    }

    .column.is-offset-half,
    .column.is-offset-half-tablet {
        margin-left: 50%;
    }

    .column.is-offset-one-third,
    .column.is-offset-one-third-tablet {
        margin-left: 33.3333%;
    }

    .column.is-offset-one-quarter,
    .column.is-offset-one-quarter-tablet {
        margin-left: 25%;
    }

    .column.is-offset-one-fifth,
    .column.is-offset-one-fifth-tablet {
        margin-left: 20%;
    }

    .column.is-offset-two-fifths,
    .column.is-offset-two-fifths-tablet {
        margin-left: 40%;
    }

    .column.is-offset-three-fifths,
    .column.is-offset-three-fifths-tablet {
        margin-left: 60%;
    }

    .column.is-offset-four-fifths,
    .column.is-offset-four-fifths-tablet {
        margin-left: 80%;
    }

    .column.is-1,
    .column.is-1-tablet {
        flex: none;
        width: 8.33333%;
    }

    .column.is-offset-1,
    .column.is-offset-1-tablet {
        margin-left: 8.33333%;
    }

    .column.is-2,
    .column.is-2-tablet {
        flex: none;
        width: 16.66667%;
    }

    .column.is-offset-2,
    .column.is-offset-2-tablet {
        margin-left: 16.66667%;
    }

    .column.is-3,
    .column.is-3-tablet {
        flex: none;
        width: 25%;
    }

    .column.is-offset-3,
    .column.is-offset-3-tablet {
        margin-left: 25%;
    }

    .column.is-4,
    .column.is-4-tablet {
        flex: none;
        width: 33.33333%;
    }

    .column.is-offset-4,
    .column.is-offset-4-tablet {
        margin-left: 33.33333%;
    }

    .column.is-5,
    .column.is-5-tablet {
        flex: none;
        width: 41.66667%;
    }

    .column.is-offset-5,
    .column.is-offset-5-tablet {
        margin-left: 41.66667%;
    }

    .column.is-6,
    .homePage_Section5 .columns.is-multiline .column .column.subtitle,
    .column.is-6-tablet {
        flex: none;
        width: 50%;
    }

    .column.is-offset-6,
    .column.is-offset-6-tablet {
        margin-left: 50%;
    }

    .column.is-7,
    .column.is-7-tablet {
        flex: none;
        width: 58.33333%;
    }

    .column.is-offset-7,
    .column.is-offset-7-tablet {
        margin-left: 58.33333%;
    }

    .column.is-8,
    .column.is-8-tablet {
        flex: none;
        width: 66.66667%;
    }

    .column.is-offset-8,
    .column.is-offset-8-tablet {
        margin-left: 66.66667%;
    }

    .column.is-9,
    .column.is-9-tablet {
        flex: none;
        width: 75%;
    }

    .column.is-offset-9,
    .column.is-offset-9-tablet {
        margin-left: 75%;
    }

    .column.is-10,
    .column.is-10-tablet {
        flex: none;
        width: 83.33333%;
    }

    .column.is-offset-10,
    .column.is-offset-10-tablet {
        margin-left: 83.33333%;
    }

    .column.is-11,
    .column.is-11-tablet {
        flex: none;
        width: 91.66667%;
    }

    .column.is-offset-11,
    .column.is-offset-11-tablet {
        margin-left: 91.66667%;
    }

    .column.is-12,
    .column.is-12-tablet {
        flex: none;
        width: 100%;
    }

    .column.is-offset-12,
    .column.is-offset-12-tablet {
        margin-left: 100%;
    }
}

@media screen and (max-width: 1087px) {
    .column.is-narrow-touch {
        flex: none;
    }

    .column.is-full-touch {
        flex: none;
        width: 100%;
    }

    .column.is-three-quarters-touch {
        flex: none;
        width: 75%;
    }

    .column.is-two-thirds-touch {
        flex: none;
        width: 66.6666%;
    }

    .column.is-half-touch {
        flex: none;
        width: 50%;
    }

    .column.is-one-third-touch {
        flex: none;
        width: 33.3333%;
    }

    .column.is-one-quarter-touch {
        flex: none;
        width: 25%;
    }

    .column.is-one-fifth-touch {
        flex: none;
        width: 20%;
    }

    .column.is-two-fifths-touch {
        flex: none;
        width: 40%;
    }

    .column.is-three-fifths-touch {
        flex: none;
        width: 60%;
    }

    .column.is-four-fifths-touch {
        flex: none;
        width: 80%;
    }

    .column.is-offset-three-quarters-touch {
        margin-left: 75%;
    }

    .column.is-offset-two-thirds-touch {
        margin-left: 66.6666%;
    }

    .column.is-offset-half-touch {
        margin-left: 50%;
    }

    .column.is-offset-one-third-touch {
        margin-left: 33.3333%;
    }

    .column.is-offset-one-quarter-touch {
        margin-left: 25%;
    }

    .column.is-offset-one-fifth-touch {
        margin-left: 20%;
    }

    .column.is-offset-two-fifths-touch {
        margin-left: 40%;
    }

    .column.is-offset-three-fifths-touch {
        margin-left: 60%;
    }

    .column.is-offset-four-fifths-touch {
        margin-left: 80%;
    }

    .column.is-1-touch {
        flex: none;
        width: 8.33333%;
    }

    .column.is-offset-1-touch {
        margin-left: 8.33333%;
    }

    .column.is-2-touch {
        flex: none;
        width: 16.66667%;
    }

    .column.is-offset-2-touch {
        margin-left: 16.66667%;
    }

    .column.is-3-touch {
        flex: none;
        width: 25%;
    }

    .column.is-offset-3-touch {
        margin-left: 25%;
    }

    .column.is-4-touch {
        flex: none;
        width: 33.33333%;
    }

    .column.is-offset-4-touch {
        margin-left: 33.33333%;
    }

    .column.is-5-touch {
        flex: none;
        width: 41.66667%;
    }

    .column.is-offset-5-touch {
        margin-left: 41.66667%;
    }

    .column.is-6-touch {
        flex: none;
        width: 50%;
    }

    .column.is-offset-6-touch {
        margin-left: 50%;
    }

    .column.is-7-touch {
        flex: none;
        width: 58.33333%;
    }

    .column.is-offset-7-touch {
        margin-left: 58.33333%;
    }

    .column.is-8-touch {
        flex: none;
        width: 66.66667%;
    }

    .column.is-offset-8-touch {
        margin-left: 66.66667%;
    }

    .column.is-9-touch {
        flex: none;
        width: 75%;
    }

    .column.is-offset-9-touch {
        margin-left: 75%;
    }

    .column.is-10-touch {
        flex: none;
        width: 83.33333%;
    }

    .column.is-offset-10-touch {
        margin-left: 83.33333%;
    }

    .column.is-11-touch {
        flex: none;
        width: 91.66667%;
    }

    .column.is-offset-11-touch {
        margin-left: 91.66667%;
    }

    .column.is-12-touch {
        flex: none;
        width: 100%;
    }

    .column.is-offset-12-touch {
        margin-left: 100%;
    }
}

.columns {
    margin-left: -.75rem;
    margin-right: -.75rem;
    margin-top: -.75rem;
}

@media screen and (min-width: 769px),
print {
    .columns:not(.is-desktop) {
        display: flex;
    }
}

@media screen and (min-width: 1088px) {
    .columns.is-desktop {
        display: flex;
    }
}

.columns.is-variable {
    --columnGap: .75rem;
    margin-left: calc(-1 * var(--columnGap));
    margin-right: calc(-1 * var(--columnGap));
}

.columns.is-variable .column {
    padding-left: var(--columnGap);
    padding-right: var(--columnGap);
}

.columns.is-variable.is-0 {
    --columnGap: 0rem;
}

.columns.is-variable.is-1 {
    --columnGap: .25rem;
}

.columns.is-variable.is-2 {
    --columnGap: .5rem;
}

.columns.is-variable.is-3 {
    --columnGap: .75rem;
}

.columns.is-variable.is-4 {
    --columnGap: 1rem;
}

.columns.is-variable.is-5 {
    --columnGap: 1.25rem;
}

.columns.is-variable.is-6,
.homePage_Section5 .columns.is-multiline .column .columns.is-variable.subtitle {
    --columnGap: 1.5rem;
}

.columns.is-variable.is-7 {
    --columnGap: 1.75rem;
}

.columns.is-variable.is-8 {
    --columnGap: 2rem;
}

ul {
    list-style: none;
    padding: 0;
}

footer .top ul li.sub-header {
    text-transform: uppercase;
    margin-bottom: 10px;
}

footer .top ul li {
    font-size: 14px;
    padding: 5px;
}

footer .top ul li.sub-header {
    font-size: .75rem !important;
}

footer .bottom,
footer a {
    padding: 20px 0;
    color: #4d4d4d !important;
}

footer .bottom .is-size-7 {
    font-size: 14px !important;
    font-weight: 300px;
}

.level {
    align-items: center;
    justify-content: space-between;
}

.level code {
    border-radius: 4px;
}

.level img {
    display: inline-block;
    vertical-align: top;
}

.level.is-mobile {
    display: flex;
}

.level.is-mobile .level-left,
.level.is-mobile .level-right {
    display: flex;
}

.level.is-mobile .level-left+.level-right {
    margin-top: 0;
}

.level.is-mobile .level-item {
    margin-right: .75rem;
}

.level.is-mobile .level-item:not(:last-child) {
    margin-bottom: 0;
}

.level.is-mobile .level-item:not(.is-narrow) {
    flex-grow: 1;
}

@media screen and (min-width: 769px),
print {
    .level {
        display: flex;
    }

    .level>.level-item:not(.is-narrow) {
        flex-grow: 1;
    }
}

.level-item {
    align-items: center;
    display: flex;
    flex-basis: auto;
    flex-grow: 0;
    flex-shrink: 0;
    justify-content: center;
}

.level-item .title,
.level-item .subtitle {
    margin-bottom: 0;
}

@media screen and (max-width: 768px) {}

.level-left,
.level-right {
    flex-basis: auto;
    flex-grow: 0;
    flex-shrink: 0;
}

.level-left .level-item.is-flexible,
.level-right .level-item.is-flexible {
    flex-grow: 1;
}

@media screen and (min-width: 769px),
print {}

.level-left {
    align-items: center;
    justify-content: flex-start;
}

@media screen and (max-width: 768px) {
    .level-left+.level-right {
        margin-top: 1.5rem;
    }
}

@media screen and (min-width: 769px),
print {
    .level-left {
        display: flex;
    }
}

.level-right {
    align-items: center;
    justify-content: flex-end;
}

@media screen and (min-width: 769px),
print {
    .level-right {
        display: flex;
    }
}

footer .top ul li.sub-header {
    text-transform: uppercase;
    margin-bottom: 10px;
}

.btn {
    -webkit-font-smoothing: antialiased;
    letter-spacing: .04em;
    display: inline-block;
    position: relative;
    height: 36px;
    padding: 0 16px;
    border: none;
    border-radius: 2px;
    outline: none;
    font-size: 14px;
    font-weight: 600;
    line-height: 36px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
}

.applicationStatus_wrapper.block {
    padding: 0;
    width: 100%;
}

.applicationStatus_wrapper .topPart {
    position: relative;
    color: white;
    text-align: center;
    padding: 2.5% 3%;
    border-radius: 5px 5px 0 0;
}

.applicationStatus_wrapper .topPart.green {
    background-color: #6dc067;
}

.applicationStatus_wrapper .topPart.pink {
    background-color: #ff6873;
}

.applicationStatus_wrapper .topPart .currentStatus {
    font-weight: 100;
    margin-top: 20px;
    font-size: 14px;
}

.applicationStatus_wrapper .topPart h1 {
    font-weight: 100;
    margin: 0;
    font-size: 24px;
}

.current .circle,
.stepsWrapper.onStep1 .steps:nth-child(3) .circle,
.stepsWrapper.onStep2 .steps:nth-child(4) .circle,
.stepsWrapper.onStep3 .steps:nth-child(5) .circle {
    width: 60px;
    height: 60px;
    margin: 0 auto;
}

.current .name,
.stepsWrapper.onStep1 .steps:nth-child(3) .name,
.stepsWrapper.onStep2 .steps:nth-child(4) .name,
.stepsWrapper.onStep3 .steps:nth-child(5) .name {
    font-size: 14px;
    font-weight: 500;
}

.current.passed .circle:before,
.stepsWrapper.onStep1 .passed.steps:nth-child(3) .circle:before,
.stepsWrapper.onStep2 .passed.steps:nth-child(4) .circle:before,
.stepsWrapper.onStep3 .passed.steps:nth-child(5) .circle:before {
    width: 30px;
    height: 60px;
}

.current.notPassed .circle:before,
.stepsWrapper.onStep1 .notPassed.steps:nth-child(3) .circle:before,
.stepsWrapper.onStep2 .notPassed.steps:nth-child(4) .circle:before,
.stepsWrapper.onStep3 .notPassed.steps:nth-child(5) .circle:before {
    width: 2px;
    height: 60px;
}

.stepsWrapper {
    position: relative;
    min-width: 100%;
    margin: 30px auto;
    display: table;
}

.stepsWrapper .line {
    border: 2px white solid;
    margin: auto;
    position: absolute;
    left: 0;
    right: 0;
    top: 34%;
}

.stepsWrapper .movingDots {
    opacity: .5;
    position: absolute;
    top: 0;
    bottom: 62%;
    right: 16%;
    left: 16%;
    background-image: linear-gradient(to right, white 50%, transparent 0%);
    background-size: 5px 2px;
    background-repeat: repeat-x;
    background-position: 0% center;
    animation-name: demo-3-before;
    animation-duration: 20s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}

@keyframes demo-3-before {
    0% {
        background-position: 0% bottom;
    }

    100% {
        background-position: 100% bottom;
    }
}

.stepsWrapper .steps {
    text-align: center;
    display: table-cell;
    vertical-align: bottom;
    width: 33%;
}

.stepsWrapper .steps .circle {
    position: relative;
    display: block;
    margin: 0 auto 23px;
    background: white;
    border-radius: 100px;
    width: 30px;
    height: 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
}

.stepsWrapper .steps .circle:before {
    content: "";
    position: absolute;
    height: 30px;
    left: 0;
    right: 0;
    margin: auto;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
}

.stepsWrapper .steps .name {
    font-size: 12px;
    font-weight: 100;
    margin-top: 10px;
    height: 18px;
}

.stepsWrapper .steps.passed .circle:before {
    background-image: url("https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/source/rev-4427ecb/apply.china-admissions.com/static/assets/img/tick.svg");
    width: 20px;
}

.stepsWrapper .steps.notPassed .circle:before {
    background-image: url("https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/source/rev-4427ecb/apply.china-admissions.com/static/assets/img/attention.svg");
    width: 1px;
}

.stepsWrapper.onStep1 .line {
    display: none;
}

.stepsWrapper.onStep2 .line {
    width: 30%;
    right: 30%;
}

.stepsWrapper.onStep3 .line {
    width: 61%;
}

.contentWrapper {
    text-align: center;
    padding: 2.5% 3% 50px;
    max-width: 500px;
    margin: auto;
}

.contentWrapper h2 {
    font-size: 18px;
    color: rgba(48, 69, 92, .8);
    margin-bottom: 30px;
    font-weight: 500;
}

.contentWrapper .button {
    max-width: 280px;
    text-transform: uppercase;
}

.applicationList_wrapper {
    text-align: center;
}

.applicationList_wrapper .itemList {
    margin: 20px auto;
}

.applicationList_wrapper .itemList .item .mainContentArea {
    width: calc(100% - 150px);
}

.applicationList_wrapper .itemList .item .mainContentArea .spec {
    color: rgba(48, 69, 92, .8);
}

@media only screen and (max-width: 1020px) {
    .applicationList_wrapper.block {
        background-color: transparent;
        box-shadow: none;
        margin-top: 30px;
    }

    .applicationList_wrapper.block hr {
        display: none;
    }
}

@media only screen and (max-width: 900px) {
    .applicationStatus_wrapper .topPart {
        padding-bottom: 180px;
    }

    .stepsWrapper {
        position: absolute;
        left: 0;
        right: 0;
    }
}

@media only screen and (max-width: 600px) {
    .stepsWrapper {}
}

.current.passed .circle:before,
.stepsWrapper.onStep1 .passed.steps:nth-child(3) .circle:before,
.stepsWrapper.onStep2 .passed.steps:nth-child(4) .circle:before,
.stepsWrapper.onStep3 .passed.steps:nth-child(5) .circle:before {
    width: 30px;
    height: 60px;
}

.was-validated .custom-select:invalid+.select2 .select2-selection {
    padding-right: 2.25rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'%23dc3545\' viewBox=\'-2 -2 7 7\'%3e%3cpath stroke=\'%23dc3545\' d=\'M0 0l3 3m0-3L0 3\'/%3e%3ccircle r=\'.5\'/%3e%3ccircle cx=\'3\' r=\'.5\'/%3e%3ccircle cy=\'3\' r=\'.5\'/%3e%3ccircle cx=\'3\' cy=\'3\' r=\'.5\'/%3e%3c/svg%3E");
    background-repeat: no-repeat;
    background-position: right calc(.375em + .1875rem) center;
    background-size: calc(.75em + .375rem) calc(.75em + .375rem);
    border-color: #dc3545 !important;
}

.was-validated .custom-select:valid+.select2 .select2-selection {
    border-color: #28a745 !important;
    padding-right: 2.25rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 8 8\'%3e%3cpath fill=\'%2328a745\' d=\'M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z\'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(.375em + .1875rem) center;
    background-size: calc(.75em + .375rem) calc(.75em + .375rem);
}

.was-validated .custom-select:valid+.select2 .select2-selection.nitro-lazy {
    background-image: none !important;
}

.was-validated .custom-select:invalid+.select2.select2-container.select2-container--bootstrap .select2-selection__arrow,
select.select2.is-invalid+.select2.select2-container.select2-container--bootstrap .select2-selection__arrow {
    right: 25px !important;
}

.was-validated .custom-select:valid+.select2.select2-container.select2-container--bootstrap .select2-selection__arrow,
select.select2.is-invalid+.select2.select2-container.select2-container--bootstrap .select2-selection__arrow {
    right: 25px !important;
}

.sub-menu {
    display: none;
}

.sub-menu div {
    border-bottom: 1px solid #dcdadb;
    padding: 7px 20px;
    color: #333;
    font-family: Lato;
    font-weight: 400;
    font-size: 14px;
    line-height: 1.25;
    height: auto;
}

#secondary-nav li:hover>.sub-menu {
    display: grid !important;
    background-color: #f2efef;
    width: 280px;
    border-top: 3px solid #e10707;
    position: absolute;
    z-index: 20;
}

.was-validated .custom-select:invalid+.select2 .select2-selection.nitro-lazy {
    background-image: none !important;
}

#secondary-nav li>ul li>ul {
    left: 100%;
    top: -3px;
}

.nav-item {
    position: relative;
}

.top-nav li:hover>.sub-menu {
    display: block;
    background-color: #f2efef;
    width: 280px;
    border-top: 3px solid #e10707;
}

.a2a_full_footer {
    display: none;
}

@keyframes splide-loading {
    0% {
        transform: rotate(0);
    }

    to {
        transform: rotate(1turn);
    }
}

.splide__container {
    position: relative;
    box-sizing: border-box;
}

.splide__list {
    display: flex;
    flex-wrap: wrap;
    margin: 0 !important;
    padding: 0 !important;
}

.splide__pagination {
    display: inline-flex;
    align-items: center;
    width: 95%;
    flex-wrap: wrap;
    justify-content: center;
    margin: 0;
}

.splide__pagination li {
    list-style-type: none;
    display: inline-block;
    line-height: 1;
    margin: 0;
}

.splide {
    position: relative;
    visibility: hidden;
}

.splide.is-active {
    visibility: visible;
}

.splide__slide {
    position: relative;
    box-sizing: border-box;
    list-style-type: none !important;
    margin: 0;
}

.splide__slide img {
    vertical-align: bottom;
}

.splide__slider {
    position: relative;
}

.splide__spinner {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 2px solid #999;
    border-left-color: transparent;
    animation: splide-loading 1s linear infinite;
}

.splide__track {
    position: relative;
    z-index: 0;
    overflow: hidden;
}

.splide--draggable>.splide__track>.splide__list>.splide__slide {
    -webkit-user-select: none;
    user-select: none;
}

.splide--fade>.splide__track>.splide__list {
    display: block;
}

.splide--fade>.splide__track>.splide__list>.splide__slide {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: 0;
}

.splide--fade>.splide__track>.splide__list>.splide__slide.is-active {
    position: relative;
    z-index: 1;
    opacity: 1;
}

.splide--rtl {
    direction: rtl;
}

.splide--ttb>.splide__track>.splide__list {
    display: block;
}

.splide--ttb>.splide__pagination {
    width: auto;
}

.splide__arrow {
    position: absolute;
    z-index: 1;
    top: 50%;
    transform: translateY(-50%);
    width: 2em;
    height: 2em;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    padding: 0;
    opacity: .7;
    background: #ccc;
}

.splide__arrow svg {
    width: 1.2em;
    height: 1.2em;
}

.splide__arrow:hover {
    cursor: pointer;
    opacity: .9;
}

.splide__arrow:focus {
    outline: none;
}

.splide__arrow--prev {
    left: 1em;
}

.splide__arrow--prev svg {
    transform: scaleX(-1);
}

.splide__arrow--next {
    right: 1em;
}

.splide__pagination {
    position: absolute;
    z-index: 1;
    bottom: .5em;
    left: 50%;
    transform: translateX(-50%);
    padding: 0;
}

.splide__pagination__page {
    display: inline-block;
    width: 8px;
    height: 8px;
    background: #ccc;
    border-radius: 50%;
    margin: 3px;
    padding: 0;
    transition: transfrom .2s linear;
    border: none;
    opacity: .7;
}

.splide__pagination__page.is-active {
    transform: scale(1.4);
    background: #fff;
}

.splide__pagination__page:hover {
    cursor: pointer;
    opacity: .9;
}

.splide__pagination__page:focus {
    outline: none;
}

.splide__progress__bar {
    width: 0;
    height: 3px;
    background: #ccc;
}

.splide--nav>.splide__track>.splide__list>.splide__slide {
    border: 3px solid transparent;
}

.splide--nav>.splide__track>.splide__list>.splide__slide.is-active {
    border-color: #000;
}

.splide--nav>.splide__track>.splide__list>.splide__slide:focus {
    outline: none;
}

.splide--rtl>.splide__arrows .splide__arrow--prev,
.splide--rtl>.splide__track>.splide__arrows .splide__arrow--prev {
    right: 1em;
    left: auto;
}

.splide--rtl>.splide__arrows .splide__arrow--prev svg,
.splide--rtl>.splide__track>.splide__arrows .splide__arrow--prev svg {
    transform: scaleX(1);
}

.splide--rtl>.splide__arrows .splide__arrow--next,
.splide--rtl>.splide__track>.splide__arrows .splide__arrow--next {
    left: 1em;
    right: auto;
}

.splide--rtl>.splide__arrows .splide__arrow--next svg,
.splide--rtl>.splide__track>.splide__arrows .splide__arrow--next svg {
    transform: scaleX(-1);
}

.splide--ttb>.splide__arrows .splide__arrow,
.splide--ttb>.splide__track>.splide__arrows .splide__arrow {
    left: 50%;
    transform: translate(-50%);
}

.splide--ttb>.splide__arrows .splide__arrow--prev,
.splide--ttb>.splide__track>.splide__arrows .splide__arrow--prev {
    top: 1em;
}

.splide--ttb>.splide__arrows .splide__arrow--prev svg,
.splide--ttb>.splide__track>.splide__arrows .splide__arrow--prev svg {
    transform: rotate(-90deg);
}

.splide--ttb>.splide__arrows .splide__arrow--next,
.splide--ttb>.splide__track>.splide__arrows .splide__arrow--next {
    top: auto;
    bottom: 1em;
}

.splide--ttb>.splide__arrows .splide__arrow--next svg,
.splide--ttb>.splide__track>.splide__arrows .splide__arrow--next svg {
    transform: rotate(90deg);
}

.splide--ttb>.splide__pagination {
    display: flex;
    flex-direction: column;
    bottom: 50%;
    left: auto;
    right: .5em;
    transform: translateY(50%);
}

.splide__slide--has-video {
    cursor: pointer;
}

.splide__slide--has-video:hover .splide__video__play {
    opacity: 1;
}

.splide__slide__container--has-video {
    cursor: pointer;
    position: relative;
}

.splide__slide__container--has-video:hover .splide__video__play {
    opacity: 1;
}

.splide__video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #000;
}

.splide__video div {
    height: 100%;
}

.splide__video iframe,
.splide__video video {
    width: 100%;
    height: 100%;
}

.splide__video__play {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #ccc;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: .7;
}

.splide__video__play:after {
    content: "";
    display: inline-block;
    border-color: transparent transparent transparent #000;
    border-style: solid;
    border-width: 9px 0 9px 17px;
    margin-left: 4px;
}

.header .splide,
.header .splide__track,
.header .splide__slide {
    height: 24rem;
}

.uni-stats {
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

@media only screen and (max-width:768px) {

    .header .splide,
    .header .splide__track {
        height: auto;
    }

    .uni-stats {
        flex-basis: auto;
        -ms-flex-positive: 1;
        flex-grow: inherit;
        position: relative;
        padding-right: 15px;
        padding-left: 15px;
        flex: 0 0 25%;
    }
}

@media only screen and (max-width:425px) {
    .header .splide__slide {
        height: 14rem;
    }

    .header {
        height: 14rem;
    }
}

.splide__pagination {
    bottom: auto;
}

.splide_testimonial .splide__arrow--prev {
    left: 0rem;
}

.splide_testimonial .splide__arrow--next {
    right: -.5rem;
}
</style>
<style onload="NPRL.onLoadStyle(this)" onerror="NPRL.onErrorStyle(this)">@media (max-width: 767px){.siq_bR{bottom:120px !important;right:20px !important;}.scroll-top{bottom:200px;}}.zsiq_custommain,.zsiq_floatmain{z-index:999 !important;}</style>


<section id="hero" style="background-image:url(images/billboard-bg.png); background-repeat: repeat; p ">
<div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/universities/photo1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="images/universities/photo2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="images/universities/photo3.jpg" style="width:100%">
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
</div>
<div class="container">
    <div class="school-page-logo">
        <div class="mr-2 mr-md-4"> <img alt="Nantong University (NTU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Nantong_University_Logo.jpg" class="logo lazyloaded" decoding="async" nitro-lazy-empty="" id="ODI1MToxNjM=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Nantong_University_Logo.jpg"> </div>
    </div>
    <div class="mr-md-2  row main position-relative justify-content-between  mb-md-5">
        <div class="col-md-8 col-12 mt-4">
            <div class="mb-4">
                <div class="row">
                    <div class="col-sm d-md-flex flex-sm-column flex-md-row mb-4">
                        <div>
                            <h3>Nantong University (NTU)</h3>
                            <h5 style="color:#777;" class="align-items-end d-flex">
                                <div class="d-flex"><i class="fa fa-map-marker" style="margin-right:5px;"></i>
                                    <p class="m-0">Nantong</p>
                                </div>
                                <div class="rating-left program-ratings align-items-end ml-lg-2 ml-2 d-none" style="flex-flow:wrap;"> <a href="#admissions-reviews">
                                        <p class="m-0 lazyloaded"><span class="badge badge-warning " id="overall-score">N/A</span> </p>
                                    </a> <a href="#admissions-reviews" class="ml-1" style="font-size:12px;"> ( <span id="review-count">No reviews yet</span> )</a>
                                    <div></div>
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="overflow-x:auto;">
                    <div class="uni-stats d-flex flex-column">
                        <h3>916</h3><small>International Students</small>
                    </div>
                    <div class="uni-stats d-flex flex-column">
                        <h3>43350</h3><small>Total Students</small>
                    </div>
                    <div class="uni-stats d-flex flex-column">
                        <h3>1912</h3><small>Founded</small>
                    </div>
                </div>
            </div>
            <nav id="navbar-sections" class="navbar mb-2">
                <ul class="nav nav-pills flex-column flex-sm-row justify-content-between w-100">
                    <li class="nav-item"> <a class="nav-link" href="#introduction">Introduction</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#about-school">School</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#admissions-programs">Programs</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#accommodation">Accommodation</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#admissions-process">Admissions</a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="#admissions-reviews">Reviews</a> </li>
                </ul>
            </nav>
            <div data-spy="scroll" data-target="#navbar-sections" data-offset="0" class="main-content">
                <div class="row">
                    <div class="col-sm">
                        <article id="introduction" style="margin-bottom:0;">
                            <section class="mdc-card__supporting-text">
                                <h3 class="ca-card-title ">📖 Introduction</h3>
                                <p></p>
                                <p>Nantong University is a comprehensive public university located in Nantong, Jiangsu Province, China. Established in 2004 through the merger of three existing institutions, Nantong University has rapidly grown into a prominent center for education, research, and innovation. As a comprehensive university, it offers a diverse range of academic disciplines, including engineering, business, medicine, and the humanities.</p>
                                <p>Nantong University is committed to providing a high-quality education, fostering innovation, and contributing to regional and national development. The university is known for its strong emphasis on practical and applied research, collaborating with industries and enterprises to address real-world challenges. While specific global rankings may vary, Nantong University has gained recognition for its contributions to various fields, including science, technology, and healthcare. The institution's commitment to academic excellence and research makes it an integral part of China's higher education landscape.</p>
                                <p></p>
                            </section>
                        </article>
                    </div>
                </div>
                <div class="mt-1 mb-1 ">
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <article id="about-school" style="margin-bottom:0;">
                            <section class="mdc-card__supporting-text">
                                <h3 class="ca-card-title mt-5">🏫 About Nantong University (NTU)</h3>
                                <div id="about-school-short" class="show-less-lg">
                                    <p><strong>Overview:</strong></p>
                                    <p>Nantong&nbsp;University&nbsp;was founded in 1912. It originated from the private&nbsp;Nantong&nbsp;Medical Specialized School and&nbsp;Nantong&nbsp;Textile&nbsp;Specialized&nbsp;School&nbsp;founded by Zhang Jian, a famous modern industrialist, and educator. In 2004, the former&nbsp;Nantong&nbsp;Medical&nbsp;College,&nbsp;Nantong Institute of Technology, and&nbsp;Nantong&nbsp;Normal&nbsp;College&nbsp;merged to form a new&nbsp;Nantong&nbsp;University. In&nbsp;<em>China&nbsp;</em><em>University&nbsp;Evaluation 2020</em>&nbsp;of the China Academy of Management Science,&nbsp;Nantong&nbsp;University&nbsp;ranked 114nd. In ESI Comprehensive ranking of Chinese universities, it ranked 114th. In Airuishen Alumni Association, it ranked 100th of the ten authoritative universities (Chinese universities) in the world in 2019.</p>
                                    <p><strong>Academics</strong></p>
                                    <p>There are 20 schools, one independent college, one Affiliated Hospital of Nantong University, the School&nbsp;of&nbsp;International &nbsp;Education, and the School of&nbsp;Continuing Education&nbsp;in the university. There are 2 postdoctoral research stations of basic medicine and clinical medicine, 3 first-level doctoral programs of basic medicine, clinical medicine, information and communication engineering, 22 first-level master degree programs, and 10 professional master degree programs. 4 disciplines of Clinical medicine, neuroscience and behavioral science, engineering, and Pharmacology &amp; Toxicology entered the top 1% of ESI global ranking of disciplines.</p>
                                    <p><strong>Facilities</strong></p>
                                    <p>The university has a number of high-end research platforms, such as the&nbsp;National-local&nbsp;Joint&nbsp;Engineering&nbsp;Research&nbsp;Center, the Key Laboratory of the Ministry of Education, the Key Laboratory of Sinopec, the Provincial Key Laboratory and&nbsp;Engineering&nbsp;Center, the Cooperative Innovation Center of Jiangsu Universities and the Key Research Base of Philosophy and Social Sciences of Provincial Universities. Over the past five years, it has undertaken nearly 500 projects of National Key Research and Development Projects, Project of National Natural Science and Social Science Foundation.</p>
                                    <p><strong>International Exchange</strong></p>
                                    <p>The university has extensively carried out overseas exchanges and cooperation. It has established friendly cooperative relations with 116 universities and research institutes in the countries of the United States, Canada, Britain, Germany, France, Italy, Russia, Australia, Japan, Korea, and Chinese regions of Hong Kong, Macao, and Taiwan.</p>
                                    <p><strong>Living in Nantong</strong></p>
                                    <p style="margin-left:0in;margin-right:0in;">Nantong is located in the alluvial plain of the lower reaches of the Yangtze&nbsp; River. The marine climate is obvious. The annual average temperature is 15.1 degrees centigrade and the annual precipitation is about 1040 millimeters. The climate is mild, the four seasons are distinct, and the spring and autumn are relatively short.</p>
                                    <p style="margin-left:0in;margin-right:0in;">Nantong belongs to the humid climate area of the north subtropical zone. The influence of monsoon is obvious. There are four distinct seasons in Nantong, with a mild climate, abundant sunshine and rainwater, and a long frost-free period. According to the statistics of the last 30 years, the annual average temperature is about 15 degrees Celsius, the annual average sunshine hours are 2000-2200 hours, the annual average precipitation is 1000-1100 mm, and the summer rainfall accounts for 40-50% of the annual rainfall in the same season. The average annual period of a rainy day is about 120 days, and there is often a period of plum rain from June to July.</p> <a class="text" id="showless-about-school" href="#moreinfo" role="button" style="color:#484848;font-weight:700;"> Show less </a>
                                </div> <a class="text show-more-btn" id="showmore-about-school" href="#moreinfo" role="button" style=""> Show more </a>
                            </section>
                        </article>
                    </div>
                </div>
                <div class="mt-1 mb-1 ">
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <article id="admissions-programs" style="margin-bottom:0;">
                            <section class="mdc-card__supporting-text">
                                <h3 class="ca-card-title mt-5">Programs</h3>
                                <div class="accordion" id="programs-accordion">
                                    <div class="card">
                                        <div class="card-header p-0 " id="others">
                                            <h2 class="mb-0"> <button style="color:#e10707;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOther" aria-expanded="false" aria-controls="collapseOther"> <strong>Non Degree Programs</strong> </button> </h2>
                                        </div>
                                        <div id="collapseOther" class="collapse show" aria-labelledby="others" data-parent="#programs-accordion">
                                            <li class="list-group-item d-lg-flex align-items-center ">
                                                <div class="col-lg-4"> <strong> <a type="submit" class="text-dark" href="/d/pNNTU3KF0/chinese-language-training-program-at-nantong-university-ntu/"> Chinese Language Training Program </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">11,205 MAD</span> / Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Mar 2025 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pNNTU3KF0/chinese-language-training-program-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <div class="see-more mt-2"> <strong> <a style="color:#d71f27;" href="/search/?degree=NONE&amp;keyword=NTU">See more non-Degree programs <i class="fas fa-arrow-right"></i> </a> </strong> </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header p-0" id="bacherlors">
                                            <h2 class="mb-0"> <button class="btn btn-link" style="color:#e10707;" data-toggle="collapse" data-target="#collapseBachelor" aria-expanded="true" aria-controls="collapseBachelor"> <strong>Bachelor's Programs</strong> </button> </h2>
                                        </div>
                                        <div id="collapseBachelor" class="collapse show" aria-labelledby="headingOne" data-parent="#programs-accordion">
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pBNTUXSY0/bachelors-civil-engineering-at-nantong-university-ntu/" class="text-dark"> Bachelor’s in Civil Engineering </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">22,411 MAD</span> / Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pBNTUXSY0/bachelors-civil-engineering-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pBNTUTEL0/bachelors-international-economics-and-trade-at-nantong-university-ntu/" class="text-dark"> Bachelor’s in International Economics and Trade </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">22,411 MAD</span> / Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 01 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pBNTUTEL0/bachelors-international-economics-and-trade-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pBNTUBVW0/mbbs-at-nantong-university-ntu/" class="text-dark"> MBBS </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">36,418 MAD</span> / Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pBNTUBVW0/mbbs-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pBNTU4QH0/bachelors-mechanical-engineering-at-nantong-university-ntu/" class="text-dark"> Bachelor’s in Mechanical Engineering </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">22,411 MAD</span> / Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 01 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pBNTU4QH0/bachelors-mechanical-engineering-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <div class="see-more mt-2 p-2"> <strong> <a style="color:#d71f27;" href="/search/?degree=BACHELOR&amp;keyword=NTU">See more bachelor programs <i class="fas fa-arrow-right"></i> </a> </strong> </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header p-0 " id="masters">
                                            <h2 class="mb-0"> <button style="color:#e10707;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseMasters" aria-expanded="false" aria-controls="collapseMasters"> <strong>Master's Programs</strong> </button> </h2>
                                        </div>
                                        <div id="collapseMasters" class="collapse show" aria-labelledby="headingTwo" data-parent="#programs-accordion">
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pMNTUJOP0/masters-biology-at-nantong-university-ntu/" class="text-dark"> Master’s in Biology </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money"></span> 25,000 CNY/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pMNTUJOP0/masters-biology-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pMNTU4VT0/masters-educational-technology-at-nantong-university-ntu/" class="text-dark"> Master’s in Educational Technology </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money"></span> 25,000 CNY/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pMNTU4VT0/masters-educational-technology-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pMNTUVVE0/masters-english-language-and-literature-at-nantong-university-ntu/" class="text-dark"> Master’s in English Language and Literature </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money"></span> 25,000 CNY/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pMNTUVVE0/masters-english-language-and-literature-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pMNTUTUN0/masters-international-business-at-nantong-university-ntu/" class="text-dark"> Master’s in International Business </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money"></span> 25,000 CNY/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pMNTUTUN0/masters-international-business-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pMNTUTCP0/masters-mathematics-at-nantong-university-ntu/" class="text-dark"> Master’s in Mathematics </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money"></span> 25,000 CNY/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pMNTUTCP0/masters-mathematics-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <div class="see-more mt-2 p-2"> <strong> <a style="color:#d71f27;" href="/search/?degree=MASTER&amp;keyword=NTU">See more master programs <i class="fas fa-arrow-right"></i> </a> </strong> </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header p-0 " id="phds">
                                            <h2 class="mb-0"> <button style="color:#e10707;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsePhd" aria-expanded="false" aria-controls="collapsePhd"> <strong>PhD Programs</strong> </button> </h2>
                                        </div>
                                        <div id="collapsePhd" class="collapse show" aria-labelledby="headingThree" data-parent="#programs-accordion">
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pPNTUJ6A0/phd-basic-medicine-at-nantong-university-ntu/" class="text-dark"> PhD in Basic Medicine </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">49,024 MAD</span>/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pPNTUJ6A0/phd-basic-medicine-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pPNTUMPK0/phd-information-and-communication-engineering-at-nantong-university-ntu/" class="text-dark"> PhD in Information and Communication Engineering </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">42,021 MAD</span>/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pPNTUMPK0/phd-information-and-communication-engineering-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pPNTULUT0/phd-internal-medicine-at-nantong-university-ntu/" class="text-dark"> PhD in Internal Medicine </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">49,024 MAD</span>/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pPNTULUT0/phd-internal-medicine-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pPNTUCGN0/phd-neurology-at-nantong-university-ntu/" class="text-dark"> PhD in Neurology </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">49,024 MAD</span>/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pPNTUCGN0/phd-neurology-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <li class="list-group-item d-lg-flex align-items-center">
                                                <div class="col-lg-4"> <strong> <a type="submit" href="/d/pPNTUE5G0/phd-oncology-at-nantong-university-ntu/" class="text-dark"> PhD in Oncology </a></strong> </div>
                                                <div class="col-lg-3"> <span> <span class="money">49,024 MAD</span>/ Year</span> </div>
                                                <div class="col-lg-2"> <span>Start Date: Sep 2024 </span> </div>
                                                <div class="col-lg-3"> <a type="submit" class="ca-button mt-2 btn-danger" href="/d/pPNTUE5G0/phd-oncology-at-nantong-university-ntu/"> Apply Now </a> </div>
                                            </li>
                                            <div class="see-more mt-2 p-2"> <strong> <a style="color:#d71f27;" href="/search/?degree=PHD&amp;keyword=NTU">See more PhD programs <i class="fas fa-arrow-right"></i> </a> </strong> </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <article id="accommodation" style="margin-bottom:0;">
                            <section class="mdc-card__supporting-text">
                                <h3 class="ca-card-title mt-5">🏠 Accommodation</h3>
                                <nav id="campus-nav">
                                    <div class="nav" id="nav-tab" role="tablist"> </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent"> </div>
                                <p>If accommodation on campus is important to you we advise you to arrive a few days before so you can try to register. You can also to choose accommodation off campus, we have an article about that <a style="color:#e10707;font-weight:700;" target="_blank" href="https://www.china-admissions.com/study-in-china-guide/accommodation/">here</a>. </p>
                            </section>
                        </article>
                    </div>
                </div>
                <div class="mt-1 mb-1 ">
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <article id="admissions-process" style="margin-bottom:0;">
                            <section class="mdc-card__supporting-text">
                                <h3 class="ca-card-title mt-5">📬 Admissions Process</h3>
                                <section class="mb-4 mt-2">
                                    <div class="d-flex mb-2">
                                        <div class="align-items-center col-6 d-flex flex-column"> <i class="fas fa-stopwatch mb-2" style="font-size:2rem;"></i>
                                            <h4>31 Days</h4> <strong> Av. Processing Speed</strong>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p></p>
                                </section>
                                <section id="Steps" class="steps-section mb-4 mt-2">
                                    <h2 class="intro-headers text-center"> 3 Steps to Apply to a Chinese University </h2>
                                    <div class="steps-timeline" id="steps-timeline">
                                        <div class="steps-one"> <img alt="Application step 1" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/apply.china-admissions.com/static/assets/icon/step1.png" class="steps-img nitro-lazy" decoding="async" nitro-lazy-empty="" id="OTE4Mjo3NA==-1" src="data:image/svg+xml;nitro-empty-id=OTE4Mjo3NA==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgd2lkdGg9IjEwMCIgaGVpZ2h0PSIxMDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+">
                                            <h3 class="intro-headers text-center"> <button class="btn btn-link" style="color:#e10707;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <strong>Choose Programs</strong> </button> </h3>
                                        </div>
                                        <div class="steps-two"> <img alt="Application step 2" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/apply.china-admissions.com/static/assets/icon/step2.png" class="steps-img nitro-lazy" decoding="async" nitro-lazy-empty="" id="OTE5Njo3NA==-1" src="data:image/svg+xml;nitro-empty-id=OTE5Njo3NA==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgd2lkdGg9IjEwMCIgaGVpZ2h0PSIxMDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+">
                                            <h3 class="intro-headers text-center"> <button class="btn btn-link" style="color:#e10707;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <strong>Apply Online</strong> </button> </h3>
                                        </div>
                                        <div class="steps-three"> <img alt="Application step 3" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/apply.china-admissions.com/static/assets/icon/step3.png" class="steps-img nitro-lazy" decoding="async" nitro-lazy-empty="" id="OTIxMDo3NA==-1" src="data:image/svg+xml;nitro-empty-id=OTIxMDo3NA==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgd2lkdGg9IjEwMCIgaGVpZ2h0PSIxMDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+">
                                            <h3 class="intro-headers text-center"> <button class="btn btn-link" style="color:#e10707;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <strong>Enroll in China</strong> </button> </h3>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#Steps">
                                        <div class="">
                                            <p> Please choose the programs <a style="color:#e10707;" target="_blank" href="https://www.china-admissions.com/how-to-choose-programs-at-chinese-universities/">here</a> , "You are advised to select 2-3 programs to increase your chances of getting accepted.</p>
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#Steps">
                                        <div class="">
                                            <div class=" mb-0">
                                                <p class="intro-headers">Required documents:</p>
                                                <ul>
                                                    <li>Passport</li>
                                                    <li>Graduation certificate</li>
                                                    <li>Passport size photo</li>
                                                </ul>
                                            </div>
                                            <div class=" mb-2">
                                                <p class="intro-headers">Preparing documents:</p>
                                                <p>You can start your application now and send the application documents during your application. Some documents you can send later if you don’t have them right away. Some more info about preparing application documents is <a style="color:#e10707;font-weight:700;" target="_blank" href="https://www.china-admissions.com/study-in-china-guide/application-documents-for-chinese-universities/">here</a> </p>
                                            </div> <a class="text" id="processinfo_showmore" href="#processinfo" role="button" style="color:#e10707;font-weight:700;"> Show more </a>
                                            <div class="d-none " id="processinfo">
                                                <p class="intro-headers">Application process:</p>
                                                <p> Applying Online is simple in just a few steps. More information is available <a style="color:#e10707;font-weight:700;" target="_blank" href="https://www.china-admissions.com/how-to-apply-online-to-chinese-universities/"> here</a>.</p>
                                                <p>The first steps are to choose the programs, pay the application fee and upload the application documents.</p>
                                                <p>Once submitted to China Admissions, we will review your application within 2-3 days and proceed to the university or ask you for further clarification</p>
                                                <p>After it has been processed to the university you will receive your unique application ID from each university.</p>
                                                <p>The university may contact you directly for further questions. </p>
                                                <p>We will then follow up each week with the university for updates. As soon as there is any update we will let you know. If you have made other plans, decide to withdraw / change address at any time please let us know.</p>
                                                <p>After you have been accepted you will receive your admissions letter electronically and asked to pay the non-refundable deposit to the university.</p>
                                                <p>Once you have paid the deposit the university will issue you the admissions letter and visa form to your home country.</p> <a class="text" id="processinfo_showless" href="#processinfo" role="button" style="color:#484848;font-weight:700;"> Show less </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#Steps">
                                        <div class=""> <a style="color:#e10707;" target="_blank" href="https://www.china-admissions.com/enrolling-at-chinese-universities/">Here</a> is some more information about the enrollment process after you have been accepted. </div>
                                    </div>
                                </section>
                            </section>
                        </article>
                    </div>
                </div>
                <div class="mt-1 mb-1 ">
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <article style="margin-bottom:0;">
                            <section class="mdc-card__supporting-text" id="question-container">
                                <h3 class="ca-card-title mt-5">❓ Have a Question?</h3>
                                <div class="form-group" style="display:flex;"> <i class="fas fa-search" style="position:absolute;margin-top:12px;left:32px;"></i> <input type="text" class="form-control fuzzy-search" id="question" placeholder="Search your question or keyword" style="padding-left:40px;"> </div>
                                <div class="">
                                    <div class="question-box d-none ">
                                        <p>There are no similar questions. Please send us your question below </p>
                                        <div class="p-3" style="background:#e5e5e5;">
                                            <form id="program-question" class="nitro-lazy">
                                                <div class="col-lg-4 mb-3"> <label for="question-type">Question Type </label> <select class="custom-select" id="question-type" name="category" required="">
                                                        <option selected="" disabled="" value="">Choose Option</option>
                                                        <option value="Intakes">Intakes</option>
                                                        <option value="Program details">Program details</option>
                                                        <option value="Admissions">Admissions</option>
                                                        <option value="Eligibility">Eligibility</option>
                                                        <option value="English Tests">English Tests</option>
                                                        <option value="Fees ">Fees</option>
                                                        <option value="Cost of Living">Cost of Living</option>
                                                        <option value="Scholarships">Scholarships</option>
                                                        <option value="Curriculum">Curriculum</option>
                                                        <option value="Others">Others</option>
                                                    </select> </div>
                                                <div class="col-12 mb-3"> <label for="question">Your Question</label> <input type="text" class="form-control" id="question" name="content" placeholder="Write your question and we will reply in 1-2 days" value="" required=""> </div>
                                                <div class="col-md-6"><button class="ca-button w-auto" type="submit">Ask Question</button></div> <input type="hidden" name="school" value="186">
                                            </form>
                                        </div>
                                    </div>
                                    <ul class="questions-answers-container list">
                                        <li class="d-flex mt-3 mb-3">
                                            <div class="votes d-flex flex-column align-items-center flex-shrink-0" style="border-right: 1px solid #ddd;text-align: center;color: #000;padding: 0;margin: 0;width: 65px;">
                                                <div class="upvote">
                                                    <i class="fa-2x fas fa-caret-up" onclick="vote(214,'up')"></i>
                                                </div>
                                                <div class="align-items-center d-flex flex-column vote-count">
                                                    <span class="count" id="count-214">0</span>
                                                    <span>votes</span>
                                                </div>
                                                <div class="downvote">
                                                    <i class="fa-2x fas fa-caret-down" onclick="vote(214,'down')"></i>
                                                </div>

                                            </div>
                                            <div class="question-answers p-2">
                                                <div class="questions d-flex mb-4">
                                                    <span class="d-md-block d-none" style="min-width:100px"><strong>Question:</strong> </span>
                                                    <span class="d-md-none d-block"><strong>Q:</strong> </span>
                                                    <strong class="userQuestion hide-class"> I would like to apply for a scholarship at the Nantong University for a Bachelor's in Dentistry and Surgery.</strong>
                                                </div>
                                                <div class="answer d-flex">
                                                    <span class="d-md-block d-none" style="min-width:100px"><strong>Answer:</strong> </span>
                                                    <span class="d-md-none d-block"><strong>A:</strong> </span>
                                                    <div class="d-flex flex-column flex-shrink-1">

                                                        <strong class="reply">Please note that the CSC scholarship is not available for students looking to study medicine.</strong>
                                                        <span class="author">by Saskia - China Admissions on January 27, 2022</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mt-3 mb-3">
                                            <div class="votes d-flex flex-column align-items-center flex-shrink-0" style="border-right: 1px solid #ddd;text-align: center;color: #000;padding: 0;margin: 0;width: 65px;">
                                                <div class="upvote">
                                                    <i class="fa-2x fas fa-caret-up" onclick="vote(454,'up')"></i>
                                                </div>
                                                <div class="align-items-center d-flex flex-column vote-count">
                                                    <span class="count" id="count-454">0</span>
                                                    <span>votes</span>
                                                </div>
                                                <div class="downvote">
                                                    <i class="fa-2x fas fa-caret-down" onclick="vote(454,'down')"></i>
                                                </div>

                                            </div>
                                            <div class="question-answers p-2">
                                                <div class="questions d-flex mb-4">
                                                    <span class="d-md-block d-none" style="min-width:100px"><strong>Question:</strong> </span>
                                                    <span class="d-md-none d-block"><strong>Q:</strong> </span>
                                                    <strong class="userQuestion hide-class"> Are there any scholarships offered for international students? </strong>
                                                </div>
                                                <div class="answer d-flex">
                                                    <span class="d-md-block d-none" style="min-width:100px"><strong>Answer:</strong> </span>
                                                    <span class="d-md-none d-block"><strong>A:</strong> </span>
                                                    <div class="d-flex flex-column flex-shrink-1">

                                                        <strong class="reply">There are no scholarships available for any medical programs.</strong>
                                                        <span class="author">by Saskia - China Admissions on April 28, 2022</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mt-3 mb-3">
                                            <div class="votes d-flex flex-column align-items-center flex-shrink-0" style="border-right: 1px solid #ddd;text-align: center;color: #000;padding: 0;margin: 0;width: 65px;">
                                                <div class="upvote">
                                                    <i class="fa-2x fas fa-caret-up" onclick="vote(445,'up')"></i>
                                                </div>
                                                <div class="align-items-center d-flex flex-column vote-count">
                                                    <span class="count" id="count-445">0</span>
                                                    <span>votes</span>
                                                </div>
                                                <div class="downvote">
                                                    <i class="fa-2x fas fa-caret-down" onclick="vote(445,'down')"></i>
                                                </div>

                                            </div>
                                            <div class="question-answers p-2">
                                                <div class="questions d-flex mb-4">
                                                    <span class="d-md-block d-none" style="min-width:100px"><strong>Question:</strong> </span>
                                                    <span class="d-md-none d-block"><strong>Q:</strong> </span>
                                                    <strong class="userQuestion hide-class"> what are the requirments for the english fluency test, is it ielts or toefl? </strong>
                                                </div>
                                                <div class="answer d-flex">
                                                    <span class="d-md-block d-none" style="min-width:100px"><strong>Answer:</strong> </span>
                                                    <span class="d-md-none d-block"><strong>A:</strong> </span>
                                                    <div class="d-flex flex-column flex-shrink-1">

                                                        <strong class="reply">Either one is fine.</strong>
                                                        <span class="author">by Saskia - China Admissions on April 25, 2022</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="pagination d-none">
                                        <li class="active"><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">1</a></li>
                                    </ul>
                                </div>
                                <div class="see-more mt-2 p-2"> <strong> <a style="color:#d71f27;" href="/questions">See more questions about studying in China<i class="fas fa-arrow-right ml-1"></i> </a> </strong> </div>
                            </section>
                        </article>
                    </div>
                </div>
                <div class="mt-1 mb-1 ">
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <article id="admissions-reviews" style="margin-bottom:0;">
                            <section class="mdc-card__supporting-text">
                                <h3 class="ca-card-title mt-5">📝 Nantong University (NTU) Reviews</h3>
                                <section class="d-lg-flex">
                                    <div class="col-12 col-lg-4 p-0 mb-4">
                                        <div class="field  ">
                                            <div class="rating-left">
                                                <h1><span class="badge badge-warning overall-score"></span> </h1> (<span class="review-count">No reviews yet</span>) <br>
                                                <div id="review-modal"> </div> <a class="text" id="write-review" data-toggle="modal" data-target="#reviewModal" href="#" role="button" style="color:#e10707;font-weight:700;"> Write a review </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 p-0 program-ratings d-none">
                                        <div class="field  ">
                                            <div class="rating-left">
                                                <p class="m-0 intro-headers">📍 Location</p>
                                                <div class="star-rating-wrapper">
                                                    <div class="city-stars">
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-942 {
                                                                    fill: url(#942_SVGID_1_);
                                                                }

                                                                .svg-hovered-942 {
                                                                    fill: url(#942_SVGID_2_);
                                                                }

                                                                .svg-active-942 {
                                                                    fill: url(#942_SVGID_3_);
                                                                }

                                                                .svg-rated-942 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="942_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="942_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-942" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-942" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-right">
                                                <div class="rating-score"></div>
                                            </div>
                                        </div>
                                        <div class="field ">
                                            <div class="rating-left">
                                                <p class="m-0 intro-headers">🛏️ Accommodation</p>
                                                <div class="star-rating-wrapper">
                                                    <div class="accommodation-stars">
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-435 {
                                                                    fill: url(#435_SVGID_1_);
                                                                }

                                                                .svg-hovered-435 {
                                                                    fill: url(#435_SVGID_2_);
                                                                }

                                                                .svg-active-435 {
                                                                    fill: url(#435_SVGID_3_);
                                                                }

                                                                .svg-rated-435 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="435_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="435_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-435" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-435" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-right">
                                                <div class="rating-score"> </div>
                                            </div>
                                        </div>
                                        <div class="field ">
                                            <div class="rating-left">
                                                <p class="m-0 intro-headers">🍜 Food</p>
                                                <div class="star-rating-wrapper">
                                                    <div class="food-stars">
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-48 {
                                                                    fill: url(#48_SVGID_1_);
                                                                }

                                                                .svg-hovered-48 {
                                                                    fill: url(#48_SVGID_2_);
                                                                }

                                                                .svg-active-48 {
                                                                    fill: url(#48_SVGID_3_);
                                                                }

                                                                .svg-rated-48 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="48_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="48_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-48" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-48" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-right">
                                                <div class="rating-score"></div>
                                            </div>
                                        </div>
                                        <div class="field ">
                                            <div class="rating-left">
                                                <p class="m-0 intro-headers">🏓 Facilities</p>
                                                <div class="star-rating-wrapper">
                                                    <div class="facilities-stars">
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-957 {
                                                                    fill: url(#957_SVGID_1_);
                                                                }

                                                                .svg-hovered-957 {
                                                                    fill: url(#957_SVGID_2_);
                                                                }

                                                                .svg-active-957 {
                                                                    fill: url(#957_SVGID_3_);
                                                                }

                                                                .svg-rated-957 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="957_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="957_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-957" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-957" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-right">
                                                <div class="rating-score"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 p-0 program-ratings d-none">
                                        <div class="field ">
                                            <div class="rating-left">
                                                <p class="m-0 intro-headers">💲 Value for money</p>
                                                <div class="star-rating-wrapper">
                                                    <div class="money-for-value-stars">
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-295 {
                                                                    fill: url(#295_SVGID_1_);
                                                                }

                                                                .svg-hovered-295 {
                                                                    fill: url(#295_SVGID_2_);
                                                                }

                                                                .svg-active-295 {
                                                                    fill: url(#295_SVGID_3_);
                                                                }

                                                                .svg-rated-295 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="295_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="295_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-295" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-295" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-right">
                                                <div class="rating-score"></div>
                                            </div>
                                        </div>
                                        <div class="field ">
                                            <div class="rating-left">
                                                <p class="m-0 intro-headers">👨‍🏫 Classes</p>
                                                <div class="star-rating-wrapper">
                                                    <div class="classes-stars">
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-94 {
                                                                    fill: url(#94_SVGID_1_);
                                                                }

                                                                .svg-hovered-94 {
                                                                    fill: url(#94_SVGID_2_);
                                                                }

                                                                .svg-active-94 {
                                                                    fill: url(#94_SVGID_3_);
                                                                }

                                                                .svg-rated-94 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="94_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="94_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-94" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-94" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-right">
                                                <div class="rating-score"></div>
                                            </div>
                                        </div>
                                        <div class="field ">
                                            <div class="rating-left">
                                                <p class="m-0 intro-headers">🕺 Student experience</p>
                                                <div class="star-rating-wrapper">
                                                    <div class="student-experience-stars">
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-965 {
                                                                    fill: url(#965_SVGID_1_);
                                                                }

                                                                .svg-hovered-965 {
                                                                    fill: url(#965_SVGID_2_);
                                                                }

                                                                .svg-active-965 {
                                                                    fill: url(#965_SVGID_3_);
                                                                }

                                                                .svg-rated-965 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="965_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="965_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-965" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-965" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-right">
                                                <div class="rating-score"></div>
                                            </div>
                                        </div>
                                        <div class="field ">
                                            <div class="rating-left">
                                                <p class="m-0 intro-headers">🗣️ Recommend a friend?</p>
                                                <div class="star-rating-wrapper">
                                                    <div class="recommendation-stars">
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                        <div class="jq-star" style="width:14px;  height:14px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:4px;" xml:space="preserve">
                                                                <style type="text/css">
                                                                .svg-empty-102 {
                                                                    fill: url(#102_SVGID_1_);
                                                                }

                                                                .svg-hovered-102 {
                                                                    fill: url(#102_SVGID_2_);
                                                                }

                                                                .svg-active-102 {
                                                                    fill: url(#102_SVGID_3_);
                                                                }

                                                                .svg-rated-102 {
                                                                    fill: crimson;
                                                                }
                                                                </style>
                                                                <linearGradient id="102_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:lightgray"></stop>
                                                                    <stop offset="1" style="stop-color:lightgray"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:orange"></stop>
                                                                    <stop offset="1" style="stop-color:orange"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="102_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250">
                                                                    <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                                    <stop offset="1" style="stop-color:#FF9511"></stop>
                                                                </linearGradient>
                                                                <polygon data-side="center" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: black;"></polygon>
                                                                <polygon data-side="left" class="svg-empty-102" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon>
                                                                <polygon data-side="right" class="svg-empty-102" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-right">
                                                <div class="rating-score"></div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </section>
                        </article>
                        <article class="p-0 col-sm review-container"></article>
                        <section class="mdc-card__supporting-text reviews pt-3"></section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <article style="margin-bottom:0;">
                            <section class="mdc-card__supporting-text"> </section>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block col-sm-4">
            <div class="sidebar mt-4">
                <div class="sticky-nav mt-4">
                    <article style="margin-bottom:0;">
                        <section class="d-flex flex-column p-3 mdc-typography--body1"> <a style="text-decoration:none;" href="#admissions-programs" class="ca-button w-100 btn btn-danger mb-4"> See Programs </a> <a href="#question-container" class="btn w-100 btn-secondary"> Request More Info </a> <small class="d-flex justify-content-center mt-2"> 391 students applied to this university</small> </section>
                    </article>
                </div>
            </div>
        </div>
        <div class="footer d-md-none position-sticky w-100" style="bottom:0px;z-index:2;background:#fff;">
            <article style="margin-bottom:0;">
                <section class="card-body"> <a style="text-decoration:none;" href="#admissions-programs" class="ca-button w-100 btn btn-danger"> See Programs </a> <small class="d-flex justify-content-center mt-2"> 391 students applied to this university</small> </section>
            </article>
        </div>
        <div class="col-12 pl-lg-0 pr-lg-0 wordpress-posts mb-4">
            <div class="col p-0">
                <article style="margin-bottom:0;">
                    <section class="mdc-card__supporting-text p-0 p-md-3">
                        <h3 class="ca-card-title blog-title-about d-none">Blog Posts About Nantong University (NTU)</h3>
                        <h3 class="ca-card-title blog-title-related">Related Posts</h3>
                        <section class="d-lg-flex " id="wordpress-posts">
                            <div class="card w-sm-auto mr-2 pb-2 mt-1 mb-1 ml-auto mr-auto mr-md-2 ml-md-0" style="width: 19rem; max-width: 19rem;" data-post="188581">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img src="https://img-cdn-china-admissions.imgix.net/wp-content/uploads/2018/05/sbc2.jpg?auto=format%2Cenhance%2Ccompress&amp;w=300&amp;h=300" class="card-img-top embed-responsive-item" alt="">
                                </div>
                                <div class="card-body pl-2 pr-2 pb-2">
                                    <h3 class="ca-card-title p-0 m-0 ca-card-title-three-lines w-100">Sino-British College is Open for 2024 Intake!</h3>
                                    <div class="d-flex flex-column">
                                        <small>Savannah Billman</small>
                                        <small>May 23, 2024</small>
                                    </div>
                                    <a class="stretched-link" target="blank" href="https://www.china-admissions.com/blog/sino-british-college-is-open-for-2024-intake/"></a>
                                </div>
                            </div>
                            <div class="card w-sm-auto mr-2 pb-2 mt-1 mb-1 ml-auto mr-auto mr-md-2 ml-md-0" style="width: 19rem; max-width: 19rem;" data-post="223242">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img src="https://img-cdn-china-admissions.imgix.net/wp-content/uploads/2024/05/9326acf942826744a40de1f75344f4e7.png?auto=format%2Cenhance%2Ccompress&amp;w=300&amp;h=300" class="card-img-top embed-responsive-item" alt="">
                                </div>
                                <div class="card-body pl-2 pr-2 pb-2">
                                    <h3 class="ca-card-title p-0 m-0 ca-card-title-three-lines w-100">Xi’an Jiaotong-Liverpool University (XJTLU) Launches 7 New Programs for International Students</h3>
                                    <div class="d-flex flex-column">
                                        <small>Angel Tolentino</small>
                                        <small>May 21, 2024</small>
                                    </div>
                                    <a class="stretched-link" target="blank" href="https://www.china-admissions.com/blog/xian-jiaotong-liverpool-university-xjtlu-launches-7-new-programs-for-international-students/"></a>
                                </div>
                            </div>
                            <div class="card w-sm-auto mr-2 pb-2 mt-1 mb-1 ml-auto mr-auto mr-md-2 ml-md-0" style="width: 19rem; max-width: 19rem;" data-post="213878">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img src="https://img-cdn-china-admissions.imgix.net/wp-content/uploads/2023/04/4162CF2EA6BC3512213BBF84925_30F29EC5_9E177.jpeg?auto=format%2Cenhance%2Ccompress&amp;w=300&amp;h=300" class="card-img-top embed-responsive-item" alt="">
                                </div>
                                <div class="card-body pl-2 pr-2 pb-2">
                                    <h3 class="ca-card-title p-0 m-0 ca-card-title-three-lines w-100">11 Reasons Why SILC Business School is a Top Choice for Your Business Education</h3>
                                    <div class="d-flex flex-column">
                                        <small>Rubelina Agustin</small>
                                        <small>May 27, 2024</small>
                                    </div>
                                    <a class="stretched-link" target="blank" href="https://www.china-admissions.com/blog/11-reasons-why-silc-business-school-is-a-top-choice-for-your-business-education/"></a>
                                </div>
                            </div>
                            <div class="card w-sm-auto mr-2 pb-2 mt-1 mb-1 ml-auto mr-auto mr-md-2 ml-md-0" style="width: 19rem; max-width: 19rem;" data-post="221000">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img src="https://img-cdn-china-admissions.imgix.net/wp-content/uploads/2023/10/chinese-visa-001.jpeg?auto=format%2Cenhance%2Ccompress&amp;w=300&amp;h=300" class="card-img-top embed-responsive-item" alt="">
                                </div>
                                <div class="card-body pl-2 pr-2 pb-2">
                                    <h3 class="ca-card-title p-0 m-0 ca-card-title-three-lines w-100">How to Apply for a Chinese Student Visa for 2024</h3>
                                    <div class="d-flex flex-column">
                                        <small>Kay M</small>
                                        <small>May 20, 2024</small>
                                    </div>
                                    <a class="stretched-link" target="blank" href="https://www.china-admissions.com/blog/how-to-apply-for-a-chinese-student-visa-for-2024/"></a>
                                </div>
                            </div>
                        </section>
                        <div class="see-more mt-2"> <strong> <a style="color:#d71f27;" href="https://china-admissions.com/blog">See more blog posts </a> </strong> </div>
                    </section>
                </article>
            </div>
        </div>
    </div>
    <template data-nitro-marker-id="2e8cb65a563e3cc5eb991ab427dd437e-1"></template>
    <script src="blob:https://apply.china-admissions.com/39a0ab44-9723-48fd-aff0-42ff90c25162" data-nitro-for-id="2e8cb65a563e3cc5eb991ab427dd437e-1" id="2e8cb65a563e3cc5eb991ab427dd437e-1"></script>
</div>


</section>





    <script src="js/scriptUniv.js"></script>
    <script src="js/scriptsearch.js"></script>


@endsection