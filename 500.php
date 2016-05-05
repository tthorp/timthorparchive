<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
define('TITLE','500 Greatest Albums according to Rolling Stone Magazine');//what is the name of the page?
head();
?>
<h1><?=TITLE?></h1>
<p>This list is from Rolling Stone Magazine. You will note that I have taken the opportunity to present the list with some of my own formatting. I took the time to listen to every album on this list. If I discovered new love for the album, I marked it with a bold title. If I felt that the album not only wasn't in my top 500 but kinda sucked, I marked it with strikethrough.</p>
<ol>
	<li>Sgt. Pepper's Lonely Hearts Club Band, The Beatles </li>
	<li class="agree">Pet Sounds, The Beach Boys </li>
	<li>Revolver, The Beatles </li>
	<li>Highway 61 Revisited, Bob Dylan </li>
	<li>Rubber Soul, The Beatles</li>
	<li>What's Going On, Marvin Gaye</li>
	<li>Exile on Main Street, The Rolling Stones</li>
	<li>London Calling, The Clash</li>
	<li>Blonde on Blonde, Bob Dylan</li>
	<li>The Beatles ("The White Album"), The Beatles</li>
	<li>The Sun Sessions, Elvis Presley</li>
	<li>Kind of Blue, Miles Davis</li>
	<li>Velvet Underground and Nico, The Velvet Underground</li>
	<li>Abbey Road, The Beatles</li>
	<li>Are You Experienced?, The Jimi Hendrix Experience</li>
	<li>Blood on the Tracks, Bob Dylan</li>
	<li>Nevermind, Nirvana</li>
	<li>Born to Run, Bruce Springsteen</li>
	<li class="disagree">Astral Weeks, Van Morrison</li>
	<li>Thriller, Michael Jackson</li>
	<li>The Great Twenty-Eight, Chuck Berry</li>
	<li>Plastic Ono Band, John Lennon</li>
	<li>Innervisions, Stevie Wonder</li>
	<li>Live at the Apollo (1963), James Brown</li>
	<li>Rumours, Fleetwood Mac</li>
	<li>The Joshua Tree, U2</li>
	<li>King of the Delta Blues Singers, Vol. 1, 
		Robert Johnson</li>
	<li class="agree">Who's Next, The Who</li>
	<li>Led Zeppelin, Led Zeppelin</li>
	<li class="disagree">Blue, Joni Mitchell</li>
	<li>Bringing It All Back Home, Bob Dylan</li>
	<li>Let It Bleed, The Rolling Stones</li>
	<li>Ramones, Ramones</li>
	<li>Music From Big Pink, The Band</li>
	<li class="agree">The Rise and Fall of Ziggy Stardust and the Spiders 
		From Mars, David  Bowie</li>
	<li class="disagree">Tapestry, Carole King</li>
	<li>Hotel California, The Eagles</li>
	<li>The Anthology, 1947 - 1972, Muddy Waters</li>
	<li>Please Please Me, The Beatles</li>
	<li>Forever Changes, Love</li>
	<li>Never Mind the Bollocks, Here's the Sex Pistols, 
		The Sex Pistols</li>
	<li>The Doors, The Doors</li>
	<li>The Dark Side of the Moon, Pink Floyd</li>
	<li class="agree">Horses, Patti Smith</li>
	<li>The Band, The Band</li>
	<li>Legend, Bob Marley and the Wailers</li>
	<li>A Love Supreme, John Coltrane</li>
	<li>It Takes a Nation of Millions to Hold Us Back, 
		Public Enemy</li>
	<li>At Fillmore East, The Allman Brothers Band</li>
	<li>Here's Little Richard, Little Richard</li>
	<li>Bridge Over Troubled Waters, Simon and Garfunkel</li>
	<li>Greatest Hits, Al Green</li>
	<li>The Birth of Soul: The Complete Atlantic Rhythm and 
		Blues Recordings,  1952 - 1959, Ray Charles</li>
	<li>Electric Ladyland, The Jimi Hendrix Experience</li>
	<li>Elvis Presley, Elvis Presley</li>
	<li>Songs in the Key of Life, Stevie Wonder</li>
	<li>Beggars Banquet, The Rolling Stones</li>
	<li>Trout Mask Replica, Captain Beefheart and His Magic Band</li>
	<li>Meet the Beatles, The Beatles</li>
	<li>Greatest Hits, Sly and the Family Stone</li>
	<li>Appetite for Destruction, Guns n' Roses</li>
	<li>Achtung Baby, U2</li>
	<li>Sticky Fingers, The Rolling Stones</li>
	<li>Phil Spector, Back to Mono (1958 - 1969), Various Artists</li>
	<li>Moondance, Van Morrison</li>
	<li>Led Zeppelin IV, Led Zeppelin</li>
	<li>The Stranger, Billy Joel</li>
	<li>Off the Wall, Michael Jackson</li>
	<li class="agree">Superfly, Curtis Mayfield</li>
	<li>Physical Graffiti, Led Zeppelin</li>
	<li>After the Gold Rush, Neil Young</li>
	<li>Purple Rain, Prince</li>
	<li>Back in Black, AC/DC</li>
	<li>Otis Blue, Otis Redding</li>
	<li>Led Zeppelin II, Led Zeppelin</li>
	<li>Imagine, John Lennon</li>
	<li>The Clash, The Clash</li>
	<li>Harvest, Neil Young</li>
	<li>Star Time, James Brown</li>
	<li>Odessey and Oracle, The Zombies</li>
	<li>Graceland, Paul Simon</li>
	<li>Axis: Bold as Love, The Jimi Hendrix Experience</li>
	<li>I Never Loved a Man the Way I Love You, Aretha Franklin</li>
	<li>Lady Soul, Aretha Franklin</li>
	<li>Born in the U.S.A., Bruce Springsteen</li>
	<li>Let It Be, The Beatles</li>
	<li>The Wall, Pink Floyd</li>
	<li>At Folsom Prison, Johnny Cash</li>
	<li>Dusty in Memphis, Dusty Springfield</li>
	<li>Talking Book, Stevie Wonder</li>
	<li>Goodbye Yellow Brick Road, Elton John</li>
	<li>20 Golden Greats, Buddy Holly</li>
	<li>Sign 'o' the Times, Prince</li>
	<li>Bitches Brew, Miles Davis</li>
	<li>Green River, Creedence Clearwater Revival</li>
	<li class="agree">Tommy, The Who</li>
	<li>The Freewheelin' Bob Dylan, Bob Dylan</li>
	<li>This Year's Model, Elvis Costello</li>
	<li>There's a Riot Goin' On, Sly and the Family Stone</li>
	<li>In the Wee Small Hours, Frank Sinatra</li>
	<li>Fresh Cream, Cream</li>
	<li>Giant Steps, John Coltrane</li>
	<li>Sweet Baby James, James Taylor</li>
	<li>Modern Sounds in Country and Western Music, Ray Charles</li>
	<li>Rocket to Russia, Ramones</li>
	<li>Portrait of a Legend 1951 - 1964, Sam Cooke</li>
	<li class="agree">Hunky Dory, David Bowie</li>
	<li>Aftermath, The Rolling Stones</li>
	<li class="agree">Loaded, The Velvet Underground</li>
	<li>The Bends, Radiohead</li>
	<li class="disagree">Court and Spark, Joni Mitchell</li>
	<li>Disraeli Gears, Cream</li>
	<li>The Who Sell Out, The Who</li>
	<li>Out of Our Heads, The Rolling Stones</li>
	<li>Layla and Other Assorted Love Songs, Derek and the Dominos</li>
	<li>At Last, Etta James</li>
	<li>Sweetheart of the Rodeo, The Byrds</li>
	<li>Stand!, Sly and the Family Stone</li>
	<li>The Harder They Come Original Soundtrack, Various Artists</li>
	<li>Raising Hell, Run-DMC</li>
	<li class="agree">Moby Grape, Moby Grape</li>
	<li>Pearl, Janis Joplin</li>
	<li class="agree">Catch a Fire, Bob Marley and the Wailers</li>
	<li>Younger Than Yesterday, The Byrds</li>
	<li>Raw Power, The Stooges</li>
	<li>Remain in Light, Talking Heads</li>
	<li>If You Can Believe Your Eyes and Ears, The Mamas and the Papas</li>
	<li>Marquee Moon, Television</li>
	<li>40 Greatest Hits, Hank Williams</li>
	<li>Paranoid, Black Sabbath</li>
	<li>Saturday Night Fever Original Soundtrack, Various Artists</li>
	<li class="agree">The Wild, the Innocent and the E Street Shuffle, 
		 Bruce Springsteen</li>
	<li class="agree">Ready to Die, The Notorious B.I.G.</li>
	<li>Slanted and Enchanted, Pavement</li>
	<li>Greatest Hits, Elton John</li>
	<li>Tim, The Replacements</li>
	<li>The Chronic, Dr. Dre</li>
	<li class="agree">Rejuvenation, The Meters</li>
	<li>All That You Can't Leave Behind, U2</li>
	<li>Parallel Lines, Blondie</li>
	<li>Live at the Regal, B.B. King</li>
	<li>Phil Spector, A Christmas Gift for You, Various Artists</li>
	<li>Gris-Gris, Dr. John</li>
	<li>Straight Outta Compton, N.W.A</li>
	<li>Aja, Steely Dan</li>
	<li>Surrealistic Pillow, Jefferson Airplane</li>
	<li>Dreams to Remember: The Otis Redding Anthology, 
		 Otis Redding</li>
	<li>Deja Vu, Crosby Stills Nash and Young</li>
	<li>Houses of the Holy, Led Zeppelin</li>
	<li>Santana, Santana</li>
	<li>Darkness on the Edge of Town, Bruce Springsteen</li>
	<li>The B-52's, The B-52's</li>
	<li>Moanin' in the Moonlight, Howlin' Wolf</li>
	<li>The Low End Theory, A Tribe Called Quest</li>
	<li class="agree">Pretenders, The Pretenders</li>
	<li>Paul's Boutique, Beastie Boys</li>
	<li>Closer, Joy Division</li>
	<li>Captain Fantastic and the Brown Dirt Cowboy, 
		 Elton John</li>
	<li>Alive, Kiss</li>
	<li class="agree">Electric Warrior, T. Rex</li>
	<li>The Dock of the Bay, Otis Redding</li>
	<li class="agree">OK Computer, Radiohead</li>
	<li>1999, Prince</li>
	<li class="disagree">Heart Like a Wheel, Linda Ronstadt</li>
	<li>Let's Get It On, Marvin Gaye</li>
	<li>Imperial Bedroom, Elvis Costello</li>
	<li>Master of Puppets, Metallica</li>
	<li>My Aim Is True, Elvis Costello</li>
	<li>Exodus, Bob Marley</li>
	<li>Live at Leeds, The Who</li>
	<li>The Notorious Byrd Brothers, The Byrds</li>
	<li>Every Picture Tells a Story, Rod Stewart</li>
	<li>Something/Anything?, Todd Rundgren</li>
	<li class="agree">Desire, Bob Dylan</li>
	<li class="disagree">Close to You, The Carpenters</li>
	<li>Rocks, Aerosmith</li>
	<li>One Nation Under a Groove, Parliament/Funkadelic</li>
	<li>Greatest Hits, The Byrds</li>
	<li class="agree">The Anthology 1961 - 1977, Curtis Mayfield 
		 and the Impressions</li>
	<li>The Definitive Collection, Abba</li>
	<li>The Rolling Stones, Now!, The Rolling Stones</li>
	<li>Natty Dread, Bob Marley and the Wailers</li>
	<li>Fleetwood Mac, Fleetwood Mac</li>
	<li>Red Headed Stranger, Willie Nelson</li>
	<li>The Stooges, The Stooges</li>
	<li>Fresh, Sly and the Family Stone</li>
	<li>So, Peter Gabriel</li>
	<li>Buffalo Springfield Again, Buffalo Springfield</li>
	<li class="agree">Happy Trails, Quicksilver Messenger Service</li>
	<li>From Elvis in Memphis, Elvis Presley</li>
	<li>Funhouse, The Stooges</li>
	<li>The Gilded Palace of Sin, The Flying Burrito Brothers</li>
	<li>Dookie, Green Day</li>
	<li>Transformer, Lou Reed</li>
	<li>Bluesbreakers, John Mayall With Eric Clapton</li>
	<li>Nuggets: Original Artyfacts from the First 
		 Psychedelic Era 1965 -  1968, Various Artists</li>
	<li>Murmur, R.E.M.</li>
	<li class="agree">The Best of, Little Walter</li>
	<li>Highway to Hell, AC/DC</li>
	<li>The Downward Spiral, Nine Inch Nails</li>
	<li>Parsley, Sage, Rosemary and Thyme, Simon and Garfunkel</li>
	<li>Bad, Michael Jackson</li>
	<li>Wheels of Fire, Cream</li>
	<li>Dirty Mind, Prince</li>
	<li>Abraxas, Santana</li>
	<li>Tea for the Tillerman, Cat Stevens</li>
	<li>Ten, Pearl Jam</li>
	<li>Everybody Knows This Is Nowhere, Neil Young With 
		 Crazy Horse</li>
	<li>Wish You Were Here, Pink Floyd</li>
	<li>Crooked Rain, Crooked Rain, Pavement</li>
	<li class="agree">Tattoo You, The Rolling Stones</li>
	<li>Proud Mary: The Best of Ike and Tina Turner, Ike 
		 and Tina Turner</li>
	<li>New York Dolls, New York Dolls</li>
	<li>Bo Diddley/Go Bo Diddley, Bo Diddley</li>
	<li>Two Steps From the Blues, Bobby Bland</li>
	<li class="disagree">The Queen Is Dead, The Smiths</li>
	<li>Licensed to Ill, Beastie Boys</li>
	<li class="agree">Look-Ka Py Py, The Meters</li>
	<li>Loveless, My Bloody Valentine</li>
	<li>New Orleans Piano, Professor Longhair</li>
	<li>War, U2</li>
	<li>The Neil Diamond Collection, Neil Diamond</li>
	<li>Howlin' Wolf, Howlin' Wolf</li>
	<li>Nebraska, Bruce Springsteen</li>
	<li>The Complete Hank Williams, Hank Williams</li>
	<li>Doolittle, Pixies</li>
	<li class="agree">Paid in Full, Eric B. and Rakim</li>
	<li>Toys in the Attic, Aerosmith</li>
	<li class="disagree">Nick of Time, Bonnie Raitt</li>
	<li>A Night at the Opera, Queen</li>
	<li>The Kink Kronikles, The Kinks</li>
	<li>Mr. Tambourine Man, The Byrds</li>
	<li>Bookends, Simon and Garfunkel</li>
	<li>The Ultimate Collection, Patsy Cline</li>
	<li>Mr. Excitement!, Jackie Wilson</li>
	<li>The Who Sings My Generation, The Who</li>
	<li class="disagree">Like a Prayer, Madonna</li>
	<li>Can't Buy a Thrill, Steely Dan</li>
	<li class="agree">Let It Be, The Replacements</li>
	<li>Run-DMC, Run-DMC</li>
	<li>Black Sabbath, Black Sabbath</li>
	<li>The Jerry Lee Lewis Anthology: All Killer No 
		 Filler!, Jerry Lee Lewis</li>
	<li>Freak Out!, The Mothers of Invention</li>
	<li>Live Dead, Grateful Dead</li>
	<li class="disagree">Bryter Layter, Nick Drake</li>
	<li class="agree">The Shape of Jazz to Come, Ornette Coleman</li>
	<li>Automatic for the People, R.E.M.</li>
	<li class="agree">Reasonable Doubt, Jay-Z</li>
	<li>Low, David Bowie</li>
	<li>The River, Bruce Springsteen</li>
	<li class="agree">The Otis Redding Dictionary of Soul, Otis Redding</li>
	<li>Metallica, Metallica</li>
	<li>Trans-Europe Express, Kraftwerk</li>
	<li>Whitney Houston, Whitney Houston</li>
	<li>The Kinks Are the Village Green Preservation 
		 Society, The Kinks</li>
	<li class="disagree">The Velvet Rope, Janet Jackson</li>
	<li class="agree">Stardust, Willie Nelson</li>
	<li>American Beauty, Grateful Dead</li>
	<li>Crosby Stills and Nash, Crosby Stills and Nash</li>
	<li class="agree">Buena Vista Social Club , Buena Vista Social Club</li>
	<li>Tracy Chapman, Tracy Chapman</li>
	<li>Workingman's Dead, Grateful Dead</li>
	<li>The Genius of Ray Charles, Ray Charles</li>
	<li class="disagree">Child Is Father to the Man, Blood, Sweat and Tears</li>
	<li>Cosmo's Factory, Creedence Clearwater Revival</li>
	<li>Quadrophenia, The Who</li>
	<li>There Goes Rhymin' Simon, Paul Simon</li>
	<li>Psycho Candy, The Jesus and Mary Chain</li>
	<li class="agree">Some Girls, The Rolling Stones</li>
	<li>The Beach Boys Today!, The Beach Boys</li>
	<li>Going to a Go-Go, Smokey Robinson and the Miracles</li>
	<li>Nightbirds, Labelle</li>
	<li>The Slim Shady LP, Eminem</li>
	<li>Mothership Connection, Parliament</li>
	<li>Rhythm Nation 1814, Janet Jackson</li>
	<li>Anthology of American Folk Music, Harry Smith, ed.</li>
	<li class="agree">Aladdin Sane, David Bowie</li>
	<li>The Immaculate Collection, Madonna</li>
	<li class="disagree">My Life, Mary J. Blige</li>
	<li class="agree">Folk Singer, Muddy Waters</li>
	<li>Can't Get Enough, Barry White</li>
	<li>The Cars, The Cars</li>
	<li>Five Leaves Left, Nick Drake</li>
	<li class="agree">Music of My Mind, Stevie Wonder</li>
	<li class="agree">I'm Still in Love With You, Al Green</li>
	<li>Los Angeles, X</li>
	<li>Anthem of the Sun, Grateful Dead</li>
	<li>Something Else by the Kinks, The Kinks</li>
	<li>Call Me, Al Green</li>
	<li class="agree">Talking Heads: 77, Talking Heads</li>
	<li class="agree">The Basement Tapes, Bob Dylan and the Band</li>
	<li class="agree">White Light / White Heat, The Velvet Underground</li>
	<li>Greatest Hits, Simon and Garfunkel</li>
	<li>Kick Out the Jams, MC5</li>
	<li>Meat Is Murder, The Smiths</li>
	<li>We're Only In It For the Money, The Mothers of Invention</li>
	<li class="agree">Weezer (Blue Album), Weezer</li>
	<li>Master of Reality, Black Sabbath</li>
	<li>Coat of Many Colors, Dolly Parton</li>
	<li>Fear of a Black Planet, Public Enemy</li>
	<li>John Wesley Harding, Bob Dylan</li>
	<li>The Marshall Mathers LP, Eminem</li>
	<li class="agree">Grace, Jeff Buckley</li>
	<li>Car Wheels on a Gravel Road, Lucinda Williams</li>
	<li>Odelay, Beck</li>
	<li>Songs for Swingin' Lovers, Frank Sinatra</li>
	<li>Avalon, Roxy Music</li>
	<li>The Sun Records Collection, Various Artists</li>
	<li>Nothing's Shocking, Jane's Addiction</li>
	<li class="agree">BloodSugarSexMagik, Red Hot Chili Peppers</li>
	<li>MTV Unplugged in New York, Nirvana</li>
	<li>The Miseducation of Lauryn Hill, Lauryn Hill</li>
	<li>Damn the Torpedoes, Tom Petty and the Heartbreakers</li>
	<li>The Velvet Underground, The Velvet Underground</li>
	<li>Surfer Rosa, Pixies</li>
	<li>Rock Steady, No Doubt</li>
	<li>The Eminem Show, Eminem</li>
	<li class="agree">Back Stabbers, The O'Jays</li>
	<li>Burnin', Bob Marley and the Wailers</li>
	<li>Pink Moon, Nick Drake</li>
	<li>Sail Away, Randy Newman</li>
	<li>Ghost in the Machine, The Police</li>
	<li>Station to Station, David Bowie</li>
	<li>The Very Best of Linda Ronstadt, Linda Ronstadt</li>
	<li>Slowhand, Eric Clapton</li>
	<li>Disintegration, The Cure</li>
	<li class="agree">Jagged Little Pill, Alanis Morissette</li>
	<li class="agree">Exile in Guyville, Liz Phair</li>
	<li>Daydream Nation, Sonic Youth</li>
	<li class="agree">In the Jungle Groove, James Brown</li>
	<li class="agree">Tonight's the Night, Neil Young</li>
	<li class="agree">Help!, The Beatles</li>
	<li>Shoot Out the Lights, Richard and Linda Thompson</li>
	<li class="agree">Wild Gift, X</li>
	<li>Squeezing Out Sparks, Graham Parker</li>
	<li>Superunknown, Soundgarden</li>
	<li>Aqualung, Jethro Tull</li>
	<li class="agree">Cheap Thrills, Big Brother and the Holding Company</li>
	<li class="agree">The Heart of Saturday Night, Tom Waits</li>
	<li>Damaged, Black Flag</li>
	<li>Play, Moby</li>
	<li>Violator, Depeche Mode</li>
	<li>Bat Out of Hell, Meat Loaf</li>
	<li>Berlin, Lou Reed</li>
	<li>Stop Making Sense, Talking Heads</li>
	<li>3 Feet High and Rising, De La Soul</li>
	<li>The Piper at the Gates of Dawn, Pink Floyd</li>
	<li>At Newport 1960, Muddy Waters</li>
	<li>Roger the Engineer (a.k.a. Over Under Sideways 
		 Down), The Yardbirds</li>
	<li>Rust Never Sleeps, Neil Young and Crazy Horse</li>
	<li>Brothers in Arms, Dire Straits</li>
	<li>52nd Street, Billy Joel</li>
	<li>Having a Rave Up With the Yardbirds, The Yardbirds</li>
	<li>12 Songs, Randy Newman</li>
	<li>Between the Buttons, The Rolling Stones</li>
	<li>Sketches of Spain, Miles Davis</li>
	<li>Honky Chateau, Elton John</li>
	<li class="agree">Singles Going Steady, Buzzcocks</li>
	<li>Stankonia, Outkast</li>
	<li>Siamese Dream, The Smashing Pumpkins</li>
	<li class="agree">Substance, New Order</li>
	<li>L.A. Woman, The Doors</li>
	<li>Ray of Light, Madonna</li>
	<li>American Recordings, Johnny Cash</li>
	<li>Louder Than Bombs, The Smiths</li>
	<li>Mott, Mott the Hoople</li>
	<li>Is This It, The Strokes</li>
	<li>Rage Against the Machine, Rage Against the Machine</li>
	<li>Reggatta de Blanc, The Police</li>
	<li>Volunteers, Jefferson Airplane</li>
	<li>Siren, Roxy Music</li>
	<li class="disagree">Late for the Sky, Jackson Browne</li>
	<li>Post, Bjork</li>
	<li>The Eagles, The Eagles</li>
	<li>The Ultimate Collection (1948 - 1990), 
		 John Lee Hooker</li>
	<li>(What's the Story) Morning Glory?, Oasis</li>
	<li>CrazySexyCool, TLC</li>
	<li class="agree">Funky Kingston, Toots and the Maytals</li>
	<li class="agree">Greetings from Asbury Park, Bruce Springsteen</li>
	<li class="agree">Sunflower, The Beach Boys</li>
	<li class="agree">Modern Lovers, Modern Lovers</li>
	<li class="agree">More Songs About Buildings and Food, Talking Heads</li>
	<li>A Quick One (Happy Jack), The Who</li>
	<li>Pyromania, Def Leppard</li>
	<li class="disagree">Pretzel Logic, Steely Dan</li>
	<li class="agree">Enter the Wu-Tang: 36 Chambers, Wu-Tang Clan</li>
	<li>Country Life, Roxy Music</li>
	<li>A Hard Day's Night, The Beatles</li>
	<li class="agree">The End of the Innocence, Don Henley</li>
	<li class="agree">Elephant, The White Stripes</li>
	<li>The Pretender, Jackson Browne</li>
	<li>Willy and the Poor Boys, Creedence Clearwater 
		 Revival</li>
	<li>Good Old Boys, Randy Newman</li>
	<li>For Your Pleasure, Roxy Music</li>
	<li>Blue Lines, Massive Attack</li>
	<li>Eliminator, ZZ Top</li>
	<li>Rain Dogs, Tom Waits</li>
	<li>Anthology, The Temptations</li>
	<li>Californication, Red Hot Chili Peppers</li>
	<li>Illmatic, Nas</li>
	<li>(Pronounced Leh-Nerd Skin-Nerd), Lynyrd Skynyrd</li>
	<li class="agree">Dr. John's Gumbo, Dr. John</li>
	<li>Radio City, Big Star</li>
	<li>Sandinista!, The Clash</li>
	<li class="agree">Rid of Me, PJ Harvey</li>
	<li>I Do Not Want What I Haven't Got, Sinead O' Connor</li>
	<li>Strange Days, The Doors</li>
	<li class="agree">Time Out of Mind, Bob Dylan</li>
	<li>461 Ocean Boulevard, Eric Clapton</li>
	<li class="agree">Pink Flag, Wire</li>
	<li>Double Nickels on the Dime, Minutemen</li>
	<li>Mezzanine, Massive Attack</li>
	<li>Beauty and the Beat, Go-Go's</li>
	<li>Greatest Hits, James Brown</li>
	<li>Van Halen , Van Halen</li>
	<li>Mule Variations, Tom Waits</li>
	<li>Boy, U2</li>
	<li>Band on the Run, Wings</li>
	<li>Dummy, Portishead</li>
	<li>With the Beatles, The Beatles</li>
	<li>The "Chirping" Crickets, Buddy Holly and 
		 the Crickets</li>
	<li>The Best of the Girl Groups, Volumes 1 and 2, 
		 Various Artists</li>
	<li>Greatest Hits, The Mamas and the Papas</li>
	<li>King of the Delta Blues Singers, Vol. 2, 
		 Robert Johnson</li>
	<li>Changesone, David Bowie</li>
	<li>The Battle of Los Angeles, Rage Against the Machine</li>
	<li>Presenting the Fabulous Ronettes Featuring 
		 Veronica, The Ronettes</li>
	<li>Kid A, Radiohead</li>
	<li>Grievous Angel, Gram Parsons</li>
	<li>At Budokan, Cheap Trick</li>
	<li>Anthology, Diana Ross and the Supremes</li>
	<li>Sleepless, Peter Wolf</li>
	<li>Another Green World, Brian Eno</li>
	<li>Outlandos D'Amour, The Police</li>
	<li>To Bring You My Love, PJ Harvey</li>
	<li>Here Come the Warm Jets, Brian Eno</li>
	<li>All Things Must Pass, George Harrison</li>
	<li>#1 Record, Big Star</li>
	<li>In Utero, Nirvana</li>
	<li class="agree">Sea Change, Beck</li>
	<li>Tragic Kingdom, No Doubt</li>
	<li>Boys Don't Cry, The Cure</li>
	<li>Live at the Harlem Square Club, 1963, Sam Cooke</li>
	<li>Criminal Minded, Boogie Down Productions</li>
	<li>Rum Sodomy and the Lash, The Pogues</li>
	<li>Suicide, Suicide</li>
	<li>Q: Are We Not Men? A: We Are Devo!, Devo</li>
	<li>In Color, Cheap Trick</li>
	<li>The World Is a Ghetto, War</li>
	<li>Fly Like an Eagle, Steve Miller Band</li>
	<li>Back in the USA, MC5</li>
	<li>Music, Madonna</li>
	<li>Ritual de lo Habitual, Jane's Addiction</li>
	<li class="agree">Getz/Gilberto, Stan Getz and Joao Gilberto Featuring Antonio Carlos  Jobim</li>
	<li>Synchronicity, The Police</li>
	<li>Third/Sister Lovers, Big Star</li>
	<li>For Everyman, Jackson Browne</li>
	<li>John Prine, John Prine</li>
	<li>Strictly Business, EPMD</li>
	<li>Love It to Death, Alice Cooper</li>
	<li>How Will the Wolf Survive?, Los Lobos</li>
	<li>Here, My Dear, Marvin Gaye</li>
	<li>Tumbleweed Connection, Elton John</li>
	<li>The Blueprint, Jay-Z</li>
	<li>Golden Hits, The Drifters</li>
	<li>Live Through This, Hole</li>
	<li>Love and Theft, Bob Dylan</li>
	<li>Elton John, Elton John</li>
	<li>Metal Box, Public Image Ltd.</li>
	<li>Document, R.E.M.</li>
	<li>Heaven Up Here, Echo and the Bunnymen</li>
	<li>Hysteria, Def Leppard</li>
	<li>A Rush of Blood to the Head, Coldplay</li>
	<li>Live in Europe, Otis Redding</li>
	<li>Tunnel of Love, Bruce Springsteen</li>
	<li>The Paul Butterfield Blues Band, The Paul 
		 Butterfield Blues Band</li>
	<li>The Score, Fugees</li>
	<li>Radio, LL Cool J</li>
	<li>I Want to See the Bright Lights Tonight, 
		 Richard and Linda Thompson</li>
	<li>Faith, George Michael</li>
	<li>The Smiths, The Smiths</li>
	<li>Armed Forces, Elvis Costello and the Attractions</li>
	<li>Life After Death, The Notorious B.I.G.</li>
	<li>Branded Man, Merle Haggard</li>
	<li>All Time Greatest Hits, Loretta Lynn</li>
	<li class="agree">Maggot Brain, Funkadelic</li>
	<li>Mellon Collie and the Infinite Sadness, 
		 The Smashing Pumpkins</li>
	<li>Voodoo, D'Angelo</li>
	<li>Guitar Town, Steve Earle</li>
	<li>Entertainment!, Gang of Four</li>
	<li>All the Young Dudes, Mott the Hoople</li>
	<li>Vitalogy, Pearl Jam</li>
	<li>That's the Way of the World, Earth, Wind 
		 and Fire</li>
	<li class="agree">She's So Unusual, Cyndi Lauper</li>
	<li>New Day Rising, Husker Du</li>
	<li>Destroyer, Kiss</li>
	<li class="agree">Yo! Bum Rush the Show, Public Enemy</li>
	<li>Tres Hombres, ZZ Top</li>
	<li class="agree">Born Under a Bad Sign, Albert King</li>
	<li>Touch, Eurythmics</li>
</ol>

<?=foot()?>