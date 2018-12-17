.center{
  max-width: 1100px;
  margin: 0 auto;
}
.header{
  background:<?php echo self::getColor('.header'); ?>;
}
.header .center{
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 3em;
}
.logo{
  max-width: 100px;
}
#main_nav ul{
  display: flex;
  list-style-type: none;
}
#main_nav ul li:not(:last-child){
  margin-right: 1em;
}
#main_nav ul li a{
  color: black;
  text-decoration: none;
  font-family: <?php echo self::getFont('#main_nav ul li a'); ?>, "Helvetica", Arial;
  font-weight: 600; /* Semibold=600 */
}
#main_nav .active{
  border-bottom: 2px solid <?php echo self::getColor('#main_nav .active'); ?>;
}
.search input[type="text"]{
  border-radius: 50px;
  border: 0;
  width: 25em;
  padding: 0.2em 0.5em;
  font-size: 1em;
}
.search button{
  background: none;
  border:none;
  color: <?php echo self::getColor('.search button'); ?>;
  font-size: 1.5em;
  cursor: pointer;
}