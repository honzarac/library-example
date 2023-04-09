<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use App\Models\Disc;
use App\Models\Magazine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LibraryItem>
 */
class LibraryItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $borrowableTypesExampleData = [
            Book::class => ['Ender’s Game by Orson Scott Card','The Hound of the Baskervilles by Sir Arthur Conan Doyle','Do Androids Dream of Electric Sheep? By Philip K. Dick','Murder on the Orient Express by Agatha Christie','Mystic River by Dennis Lehane','Nineteen Eighty-Four by George Orwell','Angels and Demons by Dan Brown','The Maltese Falcon by Dashiell Hammett','The Silence of the Lambs by Thomas Harris','The Ultimate Hitchhiker’s Guide by Douglas Adams','The Da Vinci Code by Dan Brown','The Godfather by Mario Puzo','Frankenstein by Mary Shelley','The Handmaid’s Tale by Margaret Atwood','The Martian by Andy Weir','A Wrinkle in Time by Madeleine L’Engle','Jurassic Park by Michael Crichton','Fahrenheit 451 by by Ray Bradbury','Dark Matter by Blake Crouch','Dune by Frank Herbert','And Then There Were None by Agatha Christie','The Lord of the Rings Trilogy by J. R. R. Tolkien','Harry Potter series by J. K Rowling','A Song of Ice and Fire series by George R.R. Martin','His Dark Materials by Philip Pullman','Mistborn series by Brandon Sanderson','J. R. R. Tolkien’s The Hobbit','The Way of Shadows by Brent Weeks','The Kingkiller Chronicle by Patrick Rothfuss','The Witcher series by Andrzej Sapkowski','The Graveyard Book by Neil Gaiman','Don Quixote by Miguel de Cervantes','Dracula by Bram Stoker','The Count of Monte Cristo by Alexandre Dumas','David Copperfield by Charles Dickens','Jane Eyre by Charlotte Bronte','A Tale of Two Cities by Charles Dickens','Anna Karenina by Leo Tolstoy','The Brothers Karamazov by Fyodor Dostoyevsky','The Adventures of Huckleberry Finn by Mark Twain','The Picture of Dorian Gray by Oscar Wilde','Ulysses by James Joyce','The Great Gatsby by F. Scott Fitzgerald','The Catcher in the Rye by J. D. Salinger','Lord of the Flies by William Golding','The Book Thief Markus Zuzaf','The Secret History by Donna Tartt','To Kill a Mockingbird by Harper Lee','Catch-22 by Joseph Heller','One Hundred Years of Solitude by Gabriel Garcia Marquez','Animal Farm by George Orwell ','The Grapes of Wrath by John Steinbeck ','Gone with the Wind by Margaret Mitchell ','One Flew Over the Cuckoo’s Nest by Ken Kesey ','The Sound and the Fury by William Faulkner ','Watership Down by Richards Adams','The Kite Runner by Khaled Hosseini','The Hunger Games by Suzanne Collins','American Gods by Neil Gaiman','Slaughterhouse-Five by Kurt Vonnegut','The Sun Also Rises by Ernest Hemingway','Heart of Darkness by Joseph Conrad','Brave New World by Aldous Huxley','Call of the Wild by Jack London','Mrs. Dalloway by Virginia Woolf','Pride and Prejudice by Jane Austen','Beloved by Toni Morrison','Wuthering Heights by Emily Brontë','Song of Solomon by Toni Morrison','For Whom the Bell Tolls by Ernest Hemingway','In Cold Blood by Truman Capote','Native Son by Richard Wright','The Alchemist by Paulo Coelho','Interpreter of Maladies by Jhumpa Lahiri','A Tree Grows in Brooklyn by Betty Smith','Jackson and the Olympians series by  Rick Riordan','The Little Prince by Antoine de Saint-Exupéry','The Poisonwood Bible: A Novel by Barbara Kingsolver','The Outsiders by S. E Hinton','Where the Wild Things Are by Maurice Sendak','A Wizard of Earthsea by Ursula K. Le Guin','Gilead by Marilynne Robinson','One Thousand and One Nights ANon','The Metamorphosis by Franz Kafka','The Devil in the White City by Erik Larson','78. Tinker, Tailor, Soldier, Spy by John le Carré','The Strange Case of Dr. Jekyll and Mr. Hyde by Robert Louis Stevenson','Journey to the Center of the Earth by Jules Verne,','Treasure Island by Robert Louis Stevenson','A Clockwork Orange by Anthony Burgess','Alice’s Adventures In Wonderland by Lewis Carroll','Moby-Dick by Herman Melville','Crime and Punishment by Fyodor Dostoyevsky','Invisible Man by Ralph Ellison','The Stranger by Albert Camus','Great Expectations by Charles Dickens','Middlemarch by George Eliot','Gulliver’s Travels by Jonathan Swift','Charlotte’s Web by E. B. White ','Charlie And The Chocolate Factory by Roald Dahl'],
            Disc::class => ['Jimi Hendrix Experience - Axis: Bold as Love','Bruce Springsteen - Born in the U.S.A.','Radiohead - Kid A','Elton John - Goodbye Yellow Brick Road','Captain Beefheart and His Magic Band - Trout Mask Replica','The Beatles - Meet the Beatles','Al Green - Al Green - Greatest Hits','Little Richard - Here\'s Little Richard','Elvis Presley - Elvis Presley','The Band - Music from Big Pink','Sly and the Family Stone - Stand!','Otis Redding - Otis Blue','James Brown - Sex Machine','Beck - Odelay','David Bowie - Low','Prince - 1999','Portishead - Dummy','The Who - Tommy','Curtis Mayfield - Superfly','Lauryn Hill - The Miseducation of Lauryn Hill','The Rolling Stones - Beggars Banquet','Bob Dylan - Bringing it All Back Home','Neil Young - After the Gold Rush','Bob Marley - Exodus','The Police - Synchronicity','James Brown - Live at the Apollo (1963)','Bee Gees - Saturday Night Fever','Oasis - Definitely Maybe','The Allman Brothers Band - At Fillmore East','Aretha Franklin - Lady Soul','U2 - The Unforgettable Fire','Pearl Jam - Ten','Aretha Franklin - I Never Loved a Man the Way I Love You','R.E.M. - Out of Time','John Lennon - Plastic Ono Band','The Beatles - A Hard Day\'s Night','Alanis Morissette - Jagged Little Pill','The Ramones - The Ramones','Pink Floyd - Wish You Were Here','Michael Jackson - Off the Wall','Bob Marley - Legend','Led Zeppelin - Physical Graffiti','The Smiths - The Queen is Dead','Paul Simon - Graceland','AC/DC - Back in Black','The Band - The Band','The Stone Roses - The Stone Roses','Radiohead - The Bends','Led Zeppelin - Led Zeppelin II','Van Morrison - Moondance','Oasis - (What\'s the Story) Morning Glory?','Patti Smith - Horses','R.E.M. - Automatic for the People','Love - Forever Changes','David Bowie - Hunky Dory','Stevie Wonder - Innervisions','Public Enemy - It Takes a Nation of Millions to Hold Us Back','Radiohead - OK Computer','Elvis Presley - The Sun Sessions','The Rolling Stones - Sticky Fingers','Prince - Sign \'o\' the Times','Guns N\' Roses - Appetite for Destruction','Jimi Hendrix Experience - Electric Ladyland','The Doors - The Doors','Pink Floyd - The Wall','Simon and Garfunkel - Bridge Over Troubled Water','Led Zeppelin - Led Zeppelin','Carole King - Tapestry','Prince - Purple Rain','Stevie Wonder - Songs in the Key of Life','Led Zeppelin - Led Zeppelin IV','U2 - Achtung Baby','Miles Davis - Kind of Blue','The Eagles - Hotel California','David Bowie - Rise and Fall of Ziggy Stardust','Van Morrison - Astral Weeks','The Rolling Stones - Let it Bleed','The Who - Who\'s Next','The Sex Pistols - Never Mind the Bollocks','Joni Mitchell - Blue','Jimi Hendrix Experience - Are You Experienced','The Velvet Underground - Velvet Underground & Nico','Bruce Springsteen - Born to Run','Pink Floyd - Dark Side of the Moon','The Clash - London Calling','Bob Dylan - Highway 61 Revisited','Bob Dylan - Blonde on Blonde','Bob Dylan - Blood on the Tracks','Marvin Gaye - What\'s Going On','The Rolling Stones - Exile on Main St.','Fleetwood Mac - Rumours','U2 - The Joshua Tree','The Beatles - Rubber Soul','Michael Jackson - Thriller','The Beach Boys - Pet Sounds','Nirvana - Nevermind','The Beatles - Abbey Road','The Beatles - Sgt. Peppers Lonely Hearts Club Band','The Beatles - Revolver','The Beatles - The Beatles (White Album)'],
            Magazine::class => ['T: The New York Times Style Magazine','The New York Times Magazine','T Magazine','The Observer Magazine','Observer Design','People Magazine','People StyleWatch','Dazed China','Mareena Magazine','Yo Dona','d la Repubblica','Icon - El País','Forbes','Oh lalá','La Nación Magazine','Sette','7','C- El Cultural','Revista Viva','American Express','Der Spiegel','DIE WELT - BLAU','WSJ. Magazine','Costco Connection Magazine','Historia y Vida','Historia y Vida Especial','vanguardia Dossier','India Today','L\'Équipe','Sports Illustrated','Food Network Magazine','Sport Week','Allt om Resor','Stella Magazine','Cosmopolitan (UK)','Cosmopolitan (Italy)','Cosmopolitan Spain','Cosmopolitan','Cosmopolitan NL','Cosmopolitan Japan','Bloomberg Businessweek','Bloomberg Markets Magazine','Hola Spain','Greater Manchester Business Week','NIH MedlinePlus Magazine','Good Housekeeping','Good Housekeeping (UK)','Revista Carrusel','Revista DONJUAN','Revista Época'],
        ];
        $borrowableType = $this->faker->randomElement(array_keys($borrowableTypesExampleData));
        $borrowable = $borrowableType::factory()->create();

        return [
            'name' => $this->faker->randomElement($borrowableTypesExampleData[$borrowableType]),
            'description' => $this->faker->text(),
            'borrowable_id' => $borrowable->id,
            'borrowable_type' => $borrowableType,
            'author_id' => Author::factory()->create()->id,
        ];
    }
}
