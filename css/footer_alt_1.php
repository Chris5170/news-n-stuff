.center{
  max-width: 1100px;
  margin: 0 auto;
}
.logo{
  max-width: 100px;
}
.footer{
    background: <?php echo self::getColor('.footer'); ?>;
    padding: 1em;
}
.footer .center{
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: center;
}
.footer ul li{
    list-style: none;
}