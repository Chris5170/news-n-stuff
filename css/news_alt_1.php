.center{
  max-width: 1100px;
  margin: 0 auto;
}
#articles{
    display: flex;
    justify-content: space-between;
    flex-flow: row wrap;    
}
#articles article{
    width: calc(50% - 1em);
    margin-top: 3em;
    padding-bottom: 1em;
    border-bottom: 3px solid <?php echo self::getColor('#articles article'); ?>;
}
#articles article:nth-child(odd){
    margin-right:1em;
}
#articles article:nth-child(even){
    margin-left:1em;
}
#articles article:nth-child(-n+2){
    margin-top: 2em;
}
#articles article img{
    width: 100%;
    height: 20em;
    object-fit: cover;
    object-position: center center;

}
#articles article a{
    color: <?php echo self::getColor('#articles article a'); ?>;
    font-weight: 600;
}