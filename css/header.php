.header_container *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: <?php echo self::getFont('.header_container *'); ?>, sans-serif;
}
.header_container { 
  background-color: <?php echo self::getColor('.header_container'); ?>;
  height: 5em;
  width: 100%;
  //position: fixed;
  z-index: 1;
  top: 0;
}
.header {
  display: flex;
  flex-flow: row wrap;
  align-content: center;
  justify-content: center;
  text-align: center;
}
  .nav {
  color: <?php echo self::getColor('.nav'); ?>;
  font-size: 1.5em;
  overflow: hidden;
  margin: 0.75em 0;
  padding: 0;
}
  .nav a {
  margin: 0 2em;
  padding: 0;
  color: <?php echo self::getColor('.nav a'); ?>;
  font-size: 1.3em;
  font-family: <?php echo self::getFont('.nav a'); ?>;
  text-decoration: none;
}
  .nav a:hover {
  color: <?php echo self::getColor('.nav a:hover'); ?>;
  transition: .5s ease;
}