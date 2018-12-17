i {
    color: #fff;
    transition: .5s ease;
}
i:hover{
    transition: .5s ease;
}
#ungeNav {
    background-color: #bbb;
}
#topNav {
    background-color: black;
    color: white;
    display: flex;
    padding-top: .2em;
    padding-bottom: .2em;
    font-size: 1.2em;
}
#topNav ul li {
    margin-right: 1em;
}
#topNav a:visited {
    color: white;
}
#topNav a {
    color: #fff;
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
    font-family: "Open Sans";
    text-decoration: none;
    
}
a:visited {
    color: black;
}

/* All IDs here */


#primary {
    
}
#ungeNav {
    
}
#ungeNavContainer {
    display: flex;
}

/* All CLASSES here */

/*.left {
    position: absolute;
    left: 20px;
}
.right {
    position: absolute;
    right: 20px;
}*/
.catBox {
    display: flex;
    position: absolute;
    bottom: 0;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    width: 100%;
}
.navSlider a:nth-of-type(4n+1) .catBox{
    background: red;
}
.navSlider a:nth-of-type(4n+2) .catBox{
    background: green;
}
.navSlider a:nth-of-type(4n+3) .catBox{
    background: blue;
}
.navSlider a:nth-of-type(4n+4) .catBox{
    background: orange;
}
.catBox p {
    padding: 0.3rem .7rem;
}