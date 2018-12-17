i {
    color: <?php echo self::getColor('fai'); ?>;
    transition: .5s ease;
}
i:hover{
    transition: .5s ease;
}
#ungeNav {
    background-color: <?php echo self::getColor('#ungeNav'); ?>;
}
#topNav {
    background-color: <?php echo self::getColor('#topNav : background'); ?>;
    color: <?php echo self::getColor('#topNav : color'); ?>;
    display: flex;
    padding-top: .2em;
    padding-bottom: .2em;
    font-size: 1.2em;
}
#topNav ul li {
    margin-right: 1em;
}
#topNav a:visited {
    color: <?php echo self::getColor('#topNav a:visited'); ?>;
}
#topNav a {
    color: <?php echo self::getColor('#topNav a'); ?>;
}
#topNav .wrap {
    display: flex;
    justify-content: space-between;
    
}
#topNav ul{
    text-decoration: none;
    list-style-type: none;
}
#topNav ul:last-child{
    display: flex;
    flex-flow: row wrap:;
}
p, h1, a {
    font-family: <?php echo self::getFont('p, h1, a : alt_2'); ?>;
    text-decoration: none;
    
}
a:visited {
    color: <?php echo self::getColor('a:visited : alt_2'); ?>;
}
#ungeNavContainer {
    display: flex;
}
.catBox {
    display: flex;
    position: absolute;
    bottom: 0;
    align-items: center;
    justify-content: center;
    color: <?php echo self::getColor('.catBox'); ?>;
    font-weight: 700;
    text-transform: uppercase;
    width: 100%;
}
.navSlider a:nth-of-type(4n+1) .catBox{
    background: <?php echo self::getColor('.navSlider a:nth-of-type(4n+1) .catBox'); ?>;
}
.navSlider a:nth-of-type(4n+2) .catBox{
    background: <?php echo self::getColor('.navSlider a:nth-of-type(4n+2) .catBox'); ?>;
}
.navSlider a:nth-of-type(4n+3) .catBox{
    background: <?php echo self::getColor('.navSlider a:nth-of-type(4n+3) .catBox'); ?>;
}
.navSlider a:nth-of-type(4n+4) .catBox{
    background: <?php echo self::getColor('.navSlider a:nth-of-type(4n+4) .catBox'); ?>;
}
.catBox p {
    padding: 0.3rem .7rem;
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
.wrap {
    max-width: 70rem;
    margin: 0 auto;
    width: 100%;
}