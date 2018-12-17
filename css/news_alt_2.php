
section.Headline {
    display: flex;
    justify-content: space-around;
    flex-flow: row;
    margin-top: 3em;
}
.Headline img {
    display: flex;
    object-fit: cover;
    object-position: 50% 0;
    height: 30em;
    width: 30em;
}
.Headline h1 {
    font-size: 2em;
    margin: 0;
}
.ungeNewsSlider {
    display: flex;
    background-color: #bbb;
    margin: 3em auto;
    padding: 0 1em;
    align-items: center;
    justify-content: space-between;
}
.newsThumbnail {
    display: flex;
    width: 90%;
    overflow: hidden;
}
.newsThumbnail article {
    margin: 1em;
    position: relative;
}
.newsTitleBox {
    background-color: rgba(0,0,0,0.4);
    position: absolute;
    height: 3em;
    width: 100%;
    bottom: 0;
    color: white;
}
.newsTitleBox h1{
    margin-left: 0.5em;
}
.ungeNewsSlider img {
    display: flex;
    object-fit: cover;
    height: 10em;
    width: 10em;
}
.navBtn {
    font-size: 6em;
}
.navSlider {
    display: flex;
    overflow: hidden;
    align-items: center;
    justify-content: space-between;
}
.navSlider a {
    margin: .5em 2em;
    align-items: center;
    display: flex;
    flex-flow: row wrap;
    position: relative;
}
.navSlider img {
    max-height: 5em;
    margin-bottom: .7em;
}
.ungeSliderContent {
    display: flex;
    max-width: 90%;
}
.articleEnv {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
}
.articleEnv article {
    display: flex;
    position: relative;
    min-width: 15em;
    max-width: 21em;
    margin-bottom: 1rem;
}
.articleEnv img {
    display: flex;
    object-fit: cover;
    object-position: 50% 0;
    width: 21em;
    height: 21em;
}