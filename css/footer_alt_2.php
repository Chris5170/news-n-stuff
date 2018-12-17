.footer_alt2 {
    background: <?php echo self::getColor('footer : alt_2'); ?>;
}
.wrap {
    max-width: 70rem;
    margin: 0 auto;
    width: 100%;
}
.some{
    display: flex;
    justify-content: space-between;
    padding: 1em 0;
    align-items: flex-end;
}
.some ul{
    display: flex;
    flex-flow: row wrap;
    list-style-type: none;
    font-size: 1.7em;
}
.some li{
    font-family: <?php echo self::getFont('.some li : font'); ?>;
    color: <?php echo self::getColor('.some li : color'); ?>;
}
.some li:not(:last-child){
    margin-right: 1em;
}
.some img{
    max-width: 7em;
}
.fa-facebook-square:hover{
    color: <?php echo self::getColor('.fa-facebook-square:hover'); ?>;
}
.fa-instagram:hover{
    color: <?php echo self::getColor('.fa-instagram:hover'); ?>;
}
.fa-linkedin:hover{
    color: <?php echo self::getColor('.fa-linkedin:hover'); ?>;
}
.fa-snapchat:hover{
    color: <?php echo self::getColor('.fa-snapchat:hover'); ?>;
}