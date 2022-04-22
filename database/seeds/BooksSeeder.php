<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('books')->insert([
            'book_isbn' => '978-1982110567',
            'book_title' => 'The Institute: A Novel',
            'book_author' => 'Stephen King',
            'book_image' => './img/the_institute.jpg',
            'book_descr' => 'In the middle of the night, in a house on a quiet street in suburban Minneapolis, intruders silently murder Luke Ellis�s parents and load him into a black SUV. The operation takes less than two minutes. Luke will wake up at The Institute, in a room that looks just like his own, except there�s no window. And outside his door are other doors, behind which are other kids with special talents�telekinesis and telepathy�who got to this place the same way Luke did: Kalisha, Nick, George, Iris, and ten-year-old Avery Dixon. They are all in Front Half. Others, Luke learns, graduated to Back Half, �like the roach motel,� Kalisha says. �You check in, but you don�t check out.� In this most sinister of institutions, the director, Mrs. Sigsby, and her staff are ruthlessly dedicated to extracting from these children the force of their extranormal gifts. There are no scruples here. If you go along, you get tokens for the vending machines. If you don�t, punishment is brutal. As each new victim disappears to Back Half, Luke becomes more and more desperate to get out and get help. But no one has ever escaped from the Institute. As psychically terrifying as Firestarter, and with the spectacular kid power of It, The Institute is Stephen King�s gut-wrenchingly dramatic story of good vs. evil in a world where the good guys don�t always win.',
            'book_price' => 26,
            'supplier_id' => 2,
        ]);

        DB::table('books')->insert([
            'book_isbn' => '978-0735214149',
            'book_title' => 'Profit First: Transform Your Business from a Cash-Eating Mon',
            'book_author' => 'MIKE MICHALOWICZ',
            'book_image' => './img/profit_first.jpg',
            'book_descr' => 'Conventional accounting uses the logical (albeit, flawed) formula: Sales - Expenses = Profit. The problem is, businesses are run by humans, and humans aren\'t always logical. Serial entrepreneur Mike Michalowicz has developed a behavioral approach to accounting to flip the formula: Sales - Profit = Expenses. Just as the most effective weight loss strategy is to limit portions by using smaller plates, Michalowicz shows that by taking profit first and apportioning only what remains for expenses, entrepreneurs will transform their businesses from cash-eating monsters to profitable cash cows. Using Michalowicz\'s Profit First system, readers will learn that: � Following 4 simple principles can simplify accounting and make it easier to manage a profitable business by looking at bank account balances. � A small, profitable business can be worth much more than a large business surviving on its top line. � Businesses that attain early and sustained profitability have a better shot at achieving long-term growth. With dozens of case studies, practical, step-by-step advice, and his signature sense of humor, Michalowicz has the game-changing roadmap for any entrepreneur to make money they always dreamed of.',
            'book_price' => 22,
            'supplier_id' => 1,
        ]);

        DB::table('books')->insert([
            'book_isbn' => '978-1878529183',
            'book_title' => 'Maori: Art and Culture',
            'book_author' => 'Doro Starzecka',
            'book_image' => './img/maori_art.jpg',
            'book_descr' => 'Fully illustrated with the collection of the British Museum, the landmark publication seeks to introduce Maori art and culture to a general audience and to explore themes which are at the forefront of Maori studies. The authors, the majority of them living and working in New Zealand, offer a vivid portrait of the art and culture of Maori people both past and present. As well as examining the archaeology and early history of the Maori people, the books discusses the evidence for religion, ritual and social and political organization before and after the arrival of the Europeans. The development of a distinctively Maori art is examined in detail as is the impact of external influences. The techniques and materials of fiber art-clothing, basketry, and nets-are surveyed, with special attention to developments brought about by social, economic and ecological changes in New Zealand from the earliest settlements to modern times. Modern perspectives on Maori traditions and culture, and on what it means to be Maori today, are provided by scholars Ngahuia Te Awekotuku and Arapata Hakiwai. The final chapter offers a history of the splendid Maori artifacts in the British Museum.',
            'book_price' => 52,
            'supplier_id' => 3,
        ]);
    }
}
