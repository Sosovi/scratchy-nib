<?php

namespace Database\Seeders;

use App\Models\Calligraphy;
use Illuminate\Database\Seeder;

class CalligraphySeeder extends Seeder
{
    public function run(): void
    {

        // Traditional Calligraphy
            //Vietnam Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Lộc',
                'calligraphy_description' => '"Lộc" in Vietnamese calligraphy can be written as "Lộc" or "Lộc Phát"
                (if you want to add the word "phát" which means prosperity). Vietnamese calligraphy has a long
                history and is heavily influenced by Chinese calligraphy. It is characterized by its flowing lines,
                graceful curves, and bold strokes. The Vietnamese alphabet has 29 letters, each with its own unique
                shape and form, making it a fascinating and beautiful script to work with. Vietnamese calligraphy
                is often used to write poetry, proverbs, and Buddhist scriptures, and it is considered an important
                aspect of Vietnamese culture.',
                'style_id' => '1'
            ],
            [
                'calligraphy_name' => 'Mẹ',
                'calligraphy_description' => '"Mẹ" in Vietnamese calligraphy can be written as "Mẹ" or "Mẹ yêu"
                (if you want to add the word "yêu" which means love). Vietnamese calligraphy has a distinctive style
                and is characterized by its flowing strokes, elegant curves, and bold lines.
                The script is heavily influenced by Chinese calligraphy, but has its own unique features and characteristics.
                Vietnamese calligraphy is used to write a wide range of texts, including poetry, literature, and religious texts.
                It is considered an important part of Vietnamese culture and art.',
                'style_id' => '1'
            ],
            [
                'calligraphy_name' => 'Đất Người Việt Để Yên Cho Người Việt',
                'calligraphy_description' => '"Đất Người Việt Để Yên Cho Người Việt" in Vietnamese calligraphy can be written as "Đất Người Việt Để Yên Cho Người Việt" or "Đất nước Việt Nam để yên cho nhân dân Việt Nam" (if you want to add a more complete meaning which translates to "Let the land of Vietnam be peaceful for the people of Vietnam"). Vietnamese calligraphy is a beautiful and elegant script that is often used to write important texts, such as poetry, literature, and religious scriptures. The script is characterized by its flowing strokes, bold lines, and graceful curves. It has a long and rich history and is considered an important part of Vietnamese culture and heritage.',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'Cả Một Trời Thương Nhớ',
                'calligraphy_description' => 'In English, it translates to "A Sky Full of Longing and Fondness". This phrase is often used to express the depth of one\'s love or longing for someone or something. ',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'Biết khi nào gặp lại',
                'calligraphy_description' => 'In English, it translates to "When Will We Meet Again?". This phrase is often used to express the hope or desire to see someone again in the future. Vietnamese calligraphy is a beautiful and expressive script that can convey the emotional depth and beauty of language in a unique and striking way.',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'An Trí Thảnh Thơi',
                'calligraphy_description' => '"An Trí Thảnh Thơi" in Vietnamese is a phrase that can be translated to "Peaceful and Relaxed". This phrase is often used to describe a state of being or a desired state of mind where one is calm, tranquil, and at ease. Vietnamese calligraphy is a beautiful and intricate script that can convey the emotional depth and beauty of language in a unique and striking way.',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'Tôn Sư Trọng Đạo',
                'calligraphy_description' => '"Tôn Sư Trọng Đạo" is a Vietnamese phrase that can be translated to "Respect the Teacher, Value the Moral Way". It is a Confucian teaching that emphasizes the importance of education and morality. Vietnamese calligraphy is a beautiful and expressive script that can convey the wisdom and depth of traditional Vietnamese culture in a unique and striking way.',
                'style_id' => '1',
            ],
        ]);
            //Arabic Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Ibn al-Bawwab',
                'calligraphy_description' => "A copy of the Qur'an by Ibn al-Bawwab in the year 1000/1001 CE,
                thought to be the earliest existing example of a Qur'an written in a cursive script.",
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'Allah',
                'calligraphy_description' => 'The Arabic word "Allah" (الله) which means "God" or "The Almighty" in Islam.
                It is an example of traditional Arabic calligraphy, a beautiful and popular art form in Islamic culture.
                Arabic calligraphy artists typically use a quill pen or ostrich feather to write the Arabic alphabet
                and words in different styles and sizes to create exquisite calligraphic artworks.',
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'Amanah',
                'calligraphy_description' => 'The word "amanah" (أمانة) written in Arabic calligraphy.
                The word "amanah" has various meanings in Arabic, but it generally refers to trust, honesty, or responsibility.
                It is a common word used in Islamic finance and business ethics.',
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'Wallahu Khairur Raziqin',
                'calligraphy_description' => 'The word "Wallahu" in Arabic calligraphy is a combination of two words:
                "Wallah" and "Allahu". "Wallah" means "with Allah" or "for Allah", while "Allahu" means "God" or "the
                Almighty" in Islam. Therefore, "Wallahu" means "with Allah" or "for Allah", and is often used to show
                respect and reverence for God in Islamic culture.',
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'Basmala',
                'calligraphy_description' => 'This is an Arabic calligraphy text known as "Basmala" (or "Bismillah")
                in Islamic culture. Basmala is an opening phrase in the Quran, used before starting any important action,
                and also used as a symbol of respect for God in Islamic culture. Specifically,
                Basmala means "In the name of God, the Most Gracious, the Most Merciful.”',
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'Allah katında da güzeldir',
                'calligraphy_description' => 'Mü’minlerin güzel gördükleri şey, Allah katında da güzeldir. Hadis-i Şerif Hat: Sami Efendi',
                'style_id' => '2',
            ],
        ]);
            //Chinese calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Tang Dynasty copy of 新婦地黃湯帖',
                'calligraphy_description' => "Currently in the Taito Ward Calligraphy Museum (台東区立書道博物館) ",
                'style_id' => '3',
            ],
            [
                'calligraphy_name' => 'Lantingji Xu',
                'calligraphy_description' => "Lantingji Xu (蘭亭集序) is one of the most famous Chinese calligraphy works. It was written by the famous Tang Dynasty calligrapher Wang Xizhi (王羲之) in 353 AD. The work consists of a preface and poems written by various poets who attended a gathering at Lanting (Orchid Pavilion) hosted by Wang Xizhi.
                Lantingji Xu is known for its exquisite and fluid calligraphy, as well as its literary and cultural significance. The preface in particular is considered a masterpiece of Chinese calligraphy, and has been widely studied and imitated by calligraphers throughout history.
                Today, Lantingji Xu is still considered a classic example of Chinese calligraphy and is treasured for its artistic and cultural value.",
                'style_id' => '3',
            ],
            [
                'calligraphy_name' => 'Age',
                'calligraphy_description' => "Chinese calligraphy'age' by sihui128 on DeviantArt",
                'style_id' => '3',
            ],
        ]);
            //Korean calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Yun Baek-ha (Yun Sun)',
                'calligraphy_description' => "A calligraphic handscroll with part of the Buddhist Suranga Sūtra,
                Choson/Joseon dynasty, 18th century, from Korea (© The Trustees of the British Museum)",
                'style_id' => '4',
            ],
            [
                'calligraphy_name' => 'Cursive Gungche font',
                'calligraphy_description' => "Image Courtesy dramasROK",
                'style_id' => '4',
            ],
            [
                'calligraphy_name' => 'Calligraphy works',
                'calligraphy_description' => "By Kim Jeong Hui (1786-1856), a calligrapher during the Joseon Dynasty considered to be the finest in Korean history.",
                'style_id' => '4',
            ],
            [
                'calligraphy_name' => 'Song composed',
                'calligraphy_description' => "The first printed copy of a song composed by King Sejong the Great, the inventor of Hangeul.",
                'style_id' => '4',
            ],
            [
                'calligraphy_name' => 'Mountain, blue mountain',
                'calligraphy_description' => 'A calligraphic work by calligraphy artist Kim Sung-tae.
                It reads, "Mountain, blue mountain," a line from the poem Cheongsando by Park Du Sin.',
                'style_id' => '4',
            ],
        ]);
            //Japanese calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => '別無工夫',
                'calligraphy_description' => 'by Musō Soseki (1275–1351, Japanese zen master, poet, and alligrapher.
                The characters "別無工夫" ("no spiritual meaning") are written in a flowing, connected sōsho style.',
                'style_id' => '5',
            ],
            [
                'calligraphy_name' => 'Karate (空手)',
                'calligraphy_description' => ' is a martial art developed in the Ryukyu Islands in what is now Okinawa, Japan.
                It developed from the indigenous martial arts of Ryukyu Islands (called te (手), literally "hand"; tii in Okinawan)
                under the influence of Chinese martial arts, particularly to that of the Fujian White Crane.
                Karate is a striking art using punching, kicking, knee strikes, elbow strikes and open hand techniques
                such as knife-hands, spear-hands, and palm-heel strikes. In some styles, grappling, throws, joint locks,
                 restraints, and vital point strikes are also taught. A karate practitioner is called a karateka (空手家)',
                'style_id' => '5',
            ],
            [
                'calligraphy_name' => 'Yume',
                'calligraphy_description' => '"Yume" (夢) in Japanese calligraphy means "dream". The character is written
                with three strokes, starting with a horizontal stroke, followed by a vertical stroke, and ending with a
                curved stroke. Japanese calligraphy is a beautiful and expressive art form that is deeply rooted in
                Japanese culture and tradition, and it is often used to convey profound and inspirational messages.',
                'style_id' => '5',
            ],
            [
                'calligraphy_name' => 'Dream',
                'calligraphy_description' => '"Dream" in Japanese calligraphy is written as "夢" which is pronounced as "yume".
                 It is a popular subject for Japanese calligraphy and often used to express the idea of aspirations, goals,
                 and wishes. The character consists of three strokes, with a horizontal stroke followed by a vertical
                 stroke and a final curve. Japanese calligraphy is a highly respected art form in Japan and is often
                 studied for its cultural and aesthetic value.',
                'style_id' => '5',
            ],
        ]);
            //Western calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Paul's epistle to Philemon",
                'calligraphy_description' => 'Incipit epistula ad phylemonem. PAULUS VINCTUS JESU CHRISTI & timotheus frater,
                philemoni dilecto & adjutori nostro, & appie sorori carissime, & archippo commilitoni nostro, & ecclesie,
                que in domo tua est. Gratia vobis, et pax a deo patre nostro, et domino iesu christo. Gratias ago deo meo,
                semper memoriam tui faciens in [orationibus meis].',
                'style_id' => '6',
            ],
            [
                'calligraphy_name' => 'Monastery',
                'calligraphy_description' => 'Calligraphy in a Vulgate of AD 1407 on display in Malmesbury Abbey,
                 Wiltshire, England. The Bible was hand written in Belgium, by Gerard Brils, for reading aloud
                in a monastery.',
                'style_id' => '6',
            ],
            [
                'calligraphy_name' => 'FJ Brechtel',
                'calligraphy_description' => 'In Western calligraphy, "FJ Brechtel" would be written using the Latin alphabet.
                The exact style and design of the letters would depend on the calligraphic style being used.
                For example, in Copperplate or Spencerian script, the letters would be highly ornate and flourished,
                while in a more modern or minimalist style, the letters may be simpler and more streamlined.
                However, in general, Western calligraphy emphasizes legibility, consistency, and balance in letterforms,
                and it often incorporates artistic flourishes and decorations as well.',
                'style_id' => '6',
            ],
        ]);
            //Greek Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "I always stand by your side",
                'calligraphy_description' => '"I always stand by your side" in Greek calligraphy can be written as
                "Πάντα στο πλευρό σου" (Pánta sto plefyró sou). In Greek calligraphy, each letter is carefully
                crafted to create a visually stunning and harmonious composition.
                The script is characterized by its fluid lines, decorative flourishes,
                and elegant curves. Its a beautiful script that has been used for centuries in religious texts,
                manuscripts, and inscriptions.',
                'style_id' => '7',
            ],
            [
                'calligraphy_name' => 'Imazing',
                'calligraphy_description' => 'Imazing (which I assume means "amazing") in Greek calligraphy can be written
                as "καταπληκτικό" (katapliktikó). Greek calligraphy, also known as Byzantine calligraphy,
                has a rich history and is characterized by its highly decorative and ornate style.
                The Greek alphabet has 24 letters, each with its own distinct shape and form,
                making it a beautiful and unique script to work with.',
                'style_id' => '7',
            ],
        ]);

        // Contemporary Calligraphy
            // Brush calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Experimental calligraphy",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "Love it catches you when you're not looking",
                'calligraphy_description' => '"Love, it catches you when you\'re not looking" is a poetic expression that
                means that love can come into your life unexpectedly, without any prior warning or conscious effort
                on your part. It suggests that love is not something that can be actively sought or pursued,
                but rather something that happens naturally and spontaneously. The phrase also implies that love has
                the power to surprise and delight us, and that its arrival can be a pleasant and unexpected experience.',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "Sometimes you win & sometimes you learn",
                'calligraphy_description' => 'The phrase "Sometimes you win and sometimes you learn" is a saying that
                suggests that even when you don\'t achieve your desired outcome, there is still an opportunity for growth and
                learning. Rather than seeing failure or disappointment as a negative experience,
                the phrase encourages individuals to view these situations as an opportunity to learn from their mistakes and
                improve themselves. It also implies that the process of learning and growth is ongoing, and that setbacks
                and obstacles are a natural part of the journey towards personal and professional development. In essence,
                the phrase emphasizes the importance of resilience and the ability to turn adversity into a positive experience.',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "We lightup the world",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "Pin on lettering",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "Guardian of galaxy",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
        ]);
            // Modern script
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Visually",
                'calligraphy_description' => '',
                'style_id' => '9',
            ],
            [
                'calligraphy_name' => "Bellany",
                'calligraphy_description' => '',
                'style_id' => '9',
            ],
            [
                'calligraphy_name' => "Delightful",
                'calligraphy_description' => '',
                'style_id' => '9',
            ],
        ]);
            //  Gothic calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Freedom",
                'calligraphy_description' => '',
                'style_id' => '10',
            ],
            [
                'calligraphy_name' => "Born to be free",
                'calligraphy_description' => '',
                'style_id' => '10',
            ],
            [
                'calligraphy_name' => "Never give up",
                'calligraphy_description' => '',
                'style_id' => '10',
            ],
            [
                'calligraphy_name' => "You are the one ",
                'calligraphy_description' => '',
                'style_id' => '10',
            ],
        ]);
            //  Hand lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Hey jude",
                'calligraphy_description' => '',
                'style_id' => '11',
            ],
            [
                'calligraphy_name' => "Sasan Nasernia Ink Calligraphy, on Art Paper",
                'calligraphy_description' => '',
                'style_id' => '11',
            ],
            [
                'calligraphy_name' => "Sweet Calligraphy",
                'calligraphy_description' => '',
                'style_id' => '11',
            ],
            [
                'calligraphy_name' => "Give more than you receive",
                'calligraphy_description' => '',
                'style_id' => '11',
            ],
        ]);
        //  Graffiti calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '12',
            ],
            [
                'calligraphy_name' => "Warios",
                'calligraphy_description' => '',
                'style_id' => '12',
            ],
            [
                'calligraphy_name' => "Calligraffiti",
                'calligraphy_description' => '',
                'style_id' => '12',
            ],
        ]);
        //  Experimental calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "네이버 블로그",
                'calligraphy_description' => '인생이란 본시 어디에도 의탁할 곳이 없이 다만 하늘을 이고 땅을 밟은 채 떠도는 존재일 뿐이라는 사실을.',
                'style_id' => '13',
            ],
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '13',
            ],
            [
                'calligraphy_name' => "Weisheit",
                'calligraphy_description' => '',
                'style_id' => '13',
            ],
        ]);

        // Hand-lettering & Design
            // 3D lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Aloha vibes",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
            [
                'calligraphy_name' => "Art Schools",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
            [
                'calligraphy_name' => "Handlettering 3D style",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
            [
                'calligraphy_name' => "Let your light shine",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
            [
                'calligraphy_name' => "South",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
        ]);
            // Vintage lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "We have recorded everything in a book",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Salida wine fest",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Roll with it & gain momentum",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Autumn and spring",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Work hard so you can shop harder",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Coffee Tin Signs",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "I’m in love",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
        ]);
            // Modern lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Just visit this plane ",
                'calligraphy_description' => '',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Clubnotes",
                'calligraphy_description' => '',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Tiếng nói của vạn vật",
                'calligraphy_description' => 'Voice of all things',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Tràng Giang",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Người lái đò sông đà",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Rừng xà nu",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Chuyện người con gái nam xương",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Vào phủ chúa trịnh",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Hoàng lê nhất thống chí",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "September",
                'calligraphy_description' => 'Is a month of the year written in different ways',
                'style_id' => '16',
            ],
        ]);
            // Illustrated lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "R letter",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
            [
                'calligraphy_name' => "S letter",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
            [
                'calligraphy_name' => "Summer",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
            [
                'calligraphy_name' => "Summver Vacation",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
            [
                'calligraphy_name' => "The World",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
        ]);
            // Brush lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Pink",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Back in black",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "I have found the one whom my soul loves",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Brave",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Hold back the river let me look in your eyes",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Smells like mint",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Never forget who you are",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Slow progress is better than no progress",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
        ]);
            // Calligraphic lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "It always seem impossible until it's done",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Don’t give up",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Get better, don’t try to be just good",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Happy",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Be friendly",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Live your life joyfully",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Happiness never grow olds",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Hey you’re so great",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Make - Love - Give",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
        ]);

        // Modern Calligraphy
            // Copperplate
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Make things happen",
                'calligraphy_description' => '',
                'style_id' => '20',
            ],
            [
                'calligraphy_name' => "Make more lime",
                'calligraphy_description' => '',
                'style_id' => '20',
            ],
            [
                'calligraphy_name' => "Problem are not stop signs they are guidelines",
                'calligraphy_description' => '',
                'style_id' => '20',
            ],
        ]);
            // Chalkboard Art
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Do more of what makes you happy",
                'calligraphy_description' => '',
                'style_id' => '21',
            ],            [
                'calligraphy_name' => "Nothing great ever came that easy",
                'calligraphy_description' => '',
                'style_id' => '21',
            ],
            [
                'calligraphy_name' => "Happy fall y’all",
                'calligraphy_description' => '',
                'style_id' => '21',
            ],
            [
                'calligraphy_name' => "It is never too late",
                'calligraphy_description' => '',
                'style_id' => '21',
            ],
            [
                'calligraphy_name' => "Enjoy the little things",
                'calligraphy_description' => '',
                'style_id' => '21',
            ],
            [
                'calligraphy_name' => "Make today ridiculously amazing",
                'calligraphy_description' => '',
                'style_id' => '21',
            ],
        ]);
            // Blackletter
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "D letter",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
            [
                'calligraphy_name' => "C letter",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
            [
                'calligraphy_name' => "Color blended circular calligram",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
            [
                'calligraphy_name' => "Blackletter alphabet by luca barcellona",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
            [
                'calligraphy_name' => "I’ll sleep when i’m dead",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
            [
                'calligraphy_name' => "You’ll never walk alone",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
            [
                'calligraphy_name' => "Awesome letter",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
            [
                'calligraphy_name' => "Hope is the fuel of progress",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
            [
                'calligraphy_name' => "In the beginning was the word",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
            [
                'calligraphy_name' => "100 years of the coca-cola contour bottle",
                'calligraphy_description' => '',
                'style_id' => '22',
            ],
        ]);
            // Watercolor lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Live every moment",
                'calligraphy_description' => '',
                'style_id' => '23',
            ],
            [
                'calligraphy_name' => "Done is better than perfect",
                'calligraphy_description' => '',
                'style_id' => '23',
            ],
            [
                'calligraphy_name' => "Start each day with a grateful heart",
                'calligraphy_description' => '',
                'style_id' => '23',
            ],
            [
                'calligraphy_name' => "Stay positive",
                'calligraphy_description' => '',
                'style_id' => '23',
            ],
            [
                'calligraphy_name' => "My heart sleeps by the ocean",
                'calligraphy_description' => '',
                'style_id' => '23',
            ],
            [
                'calligraphy_name' => "You have my whole heart for my whole life",
                'calligraphy_description' => '',
                'style_id' => '23',
            ],
            [
                'calligraphy_name' => "Do it all with love",
                'calligraphy_description' => '',
                'style_id' => '23',
            ],
        ]);
            // Modern script
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Shrine like the stars",
                'calligraphy_description' => '',
                'style_id' => '24',
            ],
            [
                'calligraphy_name' => "Bloom",
                'calligraphy_description' => '',
                'style_id' => '24',
            ],
            [
                'calligraphy_name' => "Take time for yourself",
                'calligraphy_description' => '',
                'style_id' => '24',
            ],
        ]);
            // Gothic script
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '25',
            ],
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '25',
            ],
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '25',
            ],
            [
                'calligraphy_name' => "Gothic calligraphy",
                'calligraphy_description' => '',
                'style_id' => '25',
            ],
        ]);
    }
}
