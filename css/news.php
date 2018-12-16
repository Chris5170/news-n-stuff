.news_container {
    display: grid;
    grid-gap: 5px;
    grid-template-columns: repeat(12, [col] 1fr );
    grid-template-rows: auto;
    background-color: <?php echo self::getColor('.news_container'); ?>;
                
}

.news {
    background-color: <?php echo self::getColor('.news'); ?>;
    color: <?php echo self::getColor('.news'); ?>;
    font-size: 160%;
    position: relative;
    min-height: 10em;
    max-height: 25em;

}
.news:hover {
    transition: .5s ease;
    background: <?php echo self::getColor('.news:hover'); ?>;
}
.news a {
    padding: 0.5em 1em;

}
.news p, .news h3, .news a{
    text-decoration: none;
    color: <?php echo self::getColor('.news p, .news h3, .news a'); ?>;
}      
.news p {
    opacity: 0;
    transition: .5s ease;
    font-size: 1rem;
}
.news:hover p {
    opacity: 1;
}
.news a{
    height: 100%;
    display: block;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-flow: column wrap;
}

.news:nth-of-type(12n+1) {
    grid-column: col / span 3;
}
.news:nth-of-type(12n+2) {
    grid-column: col 4 / span 4;
}
.news:nth-of-type(12n+3) {
    grid-column: col 8 / span 2;
}
.news:nth-of-type(12n+4) {
    grid-column: col 10 / span 3;
}

.news:nth-of-type(12n+5) {
    grid-column: col / span 2;
}

.news:nth-of-type(12n+6) {
    grid-column: col 3 / span 4;
}

.news:nth-of-type(12n+7) {
    grid-column: col 7 / span 3;
}

.news:nth-of-type(12n+8) {
    grid-column: col 10 / span 3;
}

.news:nth-of-type(12n+9) {
    grid-column: col / span 3;
}

.news:nth-of-type(12n+10) {
    grid-column: col 4 / span 3;
}

.news:nth-of-type(12n+11) {
    grid-column: col 7 / span 2;
}

.news:nth-of-type(12n+12) {
    grid-column: col 9 / span 4;
}