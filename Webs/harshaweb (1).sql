-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 12:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harshaweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `role` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `number`, `email`, `role`, `password`, `image`) VALUES
(1, 'admin', '8545127895', 'admin@gmail.com', 'admin', 'admin', 'arch.png'),
(3, 'rishu', '8521478512', 'rishu@gmail.com', 'admin', 'rishu', 'er.png'),
(6, 'khatri', '7894561254', 'khatri@gmail.com', 'subadmin', 'khatri', '');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `Advertise_Imgae` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `Advertise_Imgae`) VALUES
(1, 'ad2.jpg'),
(2, './assets/Advertise_Images/add.jfif'),
(3, './assets/Advertise_Images/add.jfif'),
(4, './assets/Advertise_Images/BD565256-1A96-46AC-B3A2-6EAE1A239448.jpeg'),
(5, './assets/Advertise_Images/contactUS.png'),
(6, './assets/Advertise_Images/add.jfif'),
(7, './assets/Advertise_Images/box2.jpg'),
(8, './assets/Advertise_Images/s.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `std_ref_id` text NOT NULL,
  `ref_inst_name` text NOT NULL,
  `ref_inst_id` text NOT NULL,
  `feedback_msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `std_ref_id`, `ref_inst_name`, `ref_inst_id`, `feedback_msg`, `date`) VALUES
(1, 'acer', 'acer@gmail.com', '659E8DBB36', 'Aquafina Typer', '36AA2F1665', 'Content is nice', '2022-12-10 06:32:42'),
(2, 'Dhoni', 'dhoni@gmail.com', 'AEB0CCF75A', '', '36AA2F1665', 'This site is really nice for typing practice', '2022-12-16 09:17:48'),
(3, 'Tarun', 'tarun@gmail.com', '58A555316E', '', '85FD5CD9BC', 'Hi, this is very good site for practice', '2022-12-26 06:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `id` int(11) NOT NULL,
  `instituteName` text NOT NULL,
  `instituteReferenceID` text NOT NULL,
  `instituteEmail` text NOT NULL,
  `instituteAddress` text NOT NULL,
  `institutePhoneNumber` text NOT NULL,
  `ownerPhoneNumber` text NOT NULL,
  `instituteLicenseNo` text NOT NULL,
  `instituteCeo` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`id`, `instituteName`, `instituteReferenceID`, `instituteEmail`, `instituteAddress`, `institutePhoneNumber`, `ownerPhoneNumber`, `instituteLicenseNo`, `instituteCeo`, `password`) VALUES
(1, 'Vidhya Technical Institute', '85FD5CD9BC', 'vti@gmail.com', 'House No-10, Street No-3, Laxmi Nagar, Delhi - 110092, Near Nirman Vihar Metro Station', '', '', '04AABCU9603R1ZV', 'Mr.Khatri', 'khatri'),
(2, 'Ace Typing Institute', '329B1961DE', 'ace@gmail.com', '98 Basement, Mall Road, Kingsway Camp, Delhi - 110009, Gtb Nagar Metro Gate No. 3', '', '', 'PB872398423SOIR8', 'Mr.Harsh', 'harsh'),
(3, 'Any Institute Name', '23184FD46C', 'email', 'delhi', '', '', '9b93bo380js', 'Mr.Harsh', 'harsh'),
(48, 'DEV Typing', 'C2C69FBEF4', 'Dev@gmail.com', 'Delhi', '', '', 'JEDI94843HFJJXXBS', 'Mr. Khatri', 'Khatri'),
(52, 'Aquafina Typer', '36AA2F1665', 'auuafina@gmail.com', 'Delhi', '', '', 'BHDJ39DJXBE9S', 'Mr. Dhoni', 'dhoni'),
(53, 'Harsha Web', '2D4C0A35A0', 'harsh@gmail.com', 'delhi', '', '', 'SDKJLH933I93XJEDO', 'Harsh', 'harsh'),
(54, 'B-town', 'D954C2FF5B', 'Btown@gmail.com', 'Brampton', '', '', 'XJDBW98JD92929DHXX', 'Sidhu Moose Wala', 'Sidhu'),
(65, 'typer', 'C4330AE88B', 'typer@gmail.com', 'delhi', '', '', 'H9JDIRUXH', 'Khatri', 'khatri'),
(66, 'HarshaWeb', '48D4722911', 'info@harshaweb.com', 'Delhi', '', '', '738813', 'Harsh', 'Harsh@Singh8576'),
(67, 'Auqa', '492F3AE36B', 'aqua@gmail.com', 'Delhi', '6254789512', '6254568954', 'DJSIXXEUWI', 'Khatri', 'khatri');

-- --------------------------------------------------------

--
-- Table structure for table `maintestrecord`
--

CREATE TABLE `maintestrecord` (
  `id` int(11) NOT NULL,
  `wpm` text NOT NULL,
  `cpm` text NOT NULL,
  `accuracy` text NOT NULL,
  `passagetime` text NOT NULL,
  `error` text NOT NULL,
  `user` text NOT NULL,
  `passageName` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintestrecord`
--

INSERT INTO `maintestrecord` (`id`, `wpm`, `cpm`, `accuracy`, `passagetime`, `error`, `user`, `passageName`, `date`) VALUES
(14, '9', '46', '87', '1', '6', 'tarun@gmail.com', 'new', '2022-12-26 09:05:27'),
(2, '17', '83', '98', '0s', '2', 'arman@gmail.com', 'test', '2022-11-28 09:41:30'),
(13, '', '', '', '15', '', 'tarun@gmail.com', 'Tailwind css', '2022-12-26 06:56:18'),
(5, '12', '58', '7', '0s', '54', 'arman@gmail.com', 'test', '2022-11-28 09:51:47'),
(6, '27', '133', '29', '0s', '94', 'tarun@gmail.com', 'test', '2022-11-28 09:54:50'),
(11, '43', '213', '98', '1', '4', 'tarun@gmail.com', 'test', '2022-11-28 10:29:50'),
(12, '27', '134', '48', '1', '70', 'name@gmail.com', 'test', '2022-12-07 13:56:44'),
(10, '17', '84', '92', '1', '7', 'camaro@gmail.com', 'test', '2022-11-28 10:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `newpassages`
--

CREATE TABLE `newpassages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `name` text NOT NULL,
  `passage` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newpassages`
--

INSERT INTO `newpassages` (`id`, `title`, `name`, `passage`, `time`) VALUES
(1, 'How to Hack ', 'Hacking ', 'This has been the first case ever to be filed against an online intrusion scheme, in the United States. The hackers have collectively impinged 60 customers and nine brokerage firms in the USA and other places. Amongst these, one of them has suffered a loss of approximately $2 million. The US officials have filed petitions against these online hackers in Nebraska, after a grand jury was seated to discuss the case issues. This incursion can affect millions of others throughout the world, as it would not be easily known as to who the brokerage companies are actually dealing with, the real clients, or the hackers. Thus serious action has to be taken against such intruders, who can victimize a large number of investors and brokerage firms all over the world.\n\nThe Assistant Attorney General Fisher has pledged to take action against such people who pose risks to others and has shown appreciation to those investigators and prosecutors who do the same, to eliminate the sources of such acts from the roots.\n\nThe operations of these crimes were being carried out from Thailand and India. The personal accounts of the defendants were used to purchase shares of stocks, following which they hacked into other people’s accounts and made good use of their passwords and usernames. New accounts were made by the hackers, by the help of which they made many purchases of the same stocks. This was done in order to make the market prices rise high, then the hackers would sell their shares for a large amount of profit, after the share prices were seen to be inflated.', '15'),
(2, 'Coding', 'Coding Devs', ' Anything ', '10'),
(3, 'Phone', 'Mobile phones ', 'A Paragraph on Mobile Phone\r\nTable of Contents\r\nShort Paragraph On Mobile Phone 165 Word\r\nAlternative Paragraph On Mobile Phone 245 Word\r\nShort Paragraph On Mobile Phone 165 Word\r\nMobile Phone\r\n\r\n\r\nA mobile phone is one kind of portable telephone. A great discovery of science. We get and send news, play game, time, calculator, etc. everything from the phone. Now the world is getting like a village which can be called a global village. As a result, we feel in touch with one another. But there present also some negative reviews. Some people use a mobile phone in the wrong way. They do the crime, and terrorism over the mobile phone. Radiation which comes out from a mobile phone during use is not good for health.\r\n\r\nSometimes it causes cancer and abnormalities. A mobile phone is a valuable blessing for us. We should not make overuse it. Stay keep in blessing it is our responsibility to stop the negative impact. Proper care and awareness of begging are essential. Especially for children because their mind is very soft. And they are not able to find good or bad from the begging point. So, we have to take care of it.\r\n\r\n\r\nAlternative Paragraph On Mobile Phone 245 Word\r\nMobile Phone\r\n\r\nA mobile phone is a very useful device for us. Without the wire, it works like a telephone system. A mobile phone system is changing after a certain time. Call rate, internet speed, get up, facilities are changing day by day. Now we can find anything or any news from google within a very short time via mobile phone. People can communicate at home or abroad through it. Wonderful wonders of science mobile phones add a new dimension to our lifestyle.\r\n\r\nThrough the mobile phone we get news, and knowledge, play games, can record audio and video, and share feelings. Not only this, we pay a bill, receive money, and send money via mobile phone. Every equation has the opposite reaction. So, the mobile phone has some injurious effects. Our young generation is slowing down due to the overuse of it. The addiction to the internet affects their youth. When they should pass time by playing on the field they pass time on a mobile phone. Terrorism, crime, bad addiction, pornography, etc. are increasing day by day.', '10'),
(4, 'History', 'Life Story', 'Adapted from \"The Colors of Animals\" by Sir John Lubbock in A Book of Natural History (1902, ed. David Starr Jordan)\r\n\r\nThe color of animals is by no means a matter of chance; it depends on many considerations, but in the majority of cases tends to protect the animal from danger by rendering it less conspicuous. Perhaps it may be said that if coloring is mainly protective, there ought to be but few brightly colored animals. There are, however, not a few cases in which vivid colors are themselves protective. The kingfisher itself, though so brightly colored, is by no means easy to see. The blue harmonizes with the water, and the bird as it darts along the stream looks almost like a flash of sunlight.\r\n\r\nDesert animals are generally the color of the desert. Thus, for instance, the lion, the antelope, and the wild donkey are all sand-colored. “Indeed,” says Canon Tristram, “in the desert, where neither trees, brushwood, nor even undulation of the surface afford the slightest protection to its foes, a modification of color assimilated to that of the surrounding country is absolutely necessary. Hence, without exception, the upper plumage of every bird, and also the fur of all the smaller mammals and the skin of all the snakes and lizards, is of one uniform sand color.”\r\n\r\nThe next point is the color of the mature caterpillars, some of which are brown. This probably makes the caterpillar even more conspicuous among the green leaves than would otherwise be the case. Let us see, then, whether the habits of the insect will throw any light upon the riddle. What would you do if you were a big caterpillar? Why, like most other defenseless creatures, you would feed by night, and lie concealed by day. So do these caterpillars. When the morning light comes, they creep down the stem of the food plant, and lie concealed among the thick herbage and dry sticks and leaves, near the ground, and it is obvious that under such circumstances the brown color really becomes a protection. It might indeed be argued that the caterpillars, having become brown, concealed themselves on the ground, and that we were reversing the state of things. But this is not so, because, while we may say as a general rule that large caterpillars feed by night and lie concealed by day, it is by no means always the case that they are brown; some of them still retaining the green color. We may then conclude that the habit of concealing themselves by day came first, and that the brown color is a later adaptation.', '20'),
(5, 'Coding ', 'Codign', 'ost paragraphs contain between three and five sentences, but there are plenty of exceptions. Different types of paragraphs have different numbers of sentences, like those in narrative writing, in particular, where single-sentence paragraphs are common.\r\n\r\nLikewise, the number of sentences in a paragraph can change based on the style of the writer. Some authors prefer longer, more descriptive paragraphs, while other authors prefer shorter, faster-paced paragraphs. \r\n\r\nWhen it comes to nonfiction writing, like research papers or reports, most paragraphs have at least three sentences: a topic sentence, a development/support sentence, and a conclusion sentence. \r\n\r\nTypes of paragraphs \r\nDepending on the kind of writing you’re doing, you may need to use different types of paragraphs. Here’s a brief explanation of the common paragraph types most writing deals with. \r\n\r\nExpository: Common in nonfiction and all types of essays, expository paragraphs revolve around explaining and discussing a single point or idea. \r\nPersuasive: Just like expository paragraphs, persuasive paragraphs focus on discussing a single point; however, they support opinions instead of facts. \r\nNarrative: When telling a story, a narrative paragraph explains an action or event. Each new sentence furthers or expands upon the action by providing new information. \r\nDescriptive: Also common in storytelling, descriptive paragraphs focus on describing a single topic, such as a person or an environment. Each new sentence adds a new detail about that topic. ', '20'),
(6, 'Economics', 'Money Value', 'Faker is an npm package that generates random, realistic, fake inputs. It’s used commonly in unit testing to run tests with different inputs every time. Your tests may pass with foo bar baz, but it could fail in other cases.\r\n\r\nFor example, if your function under test needs name parameters, you can use faker.name.findName(), which gives you Myra Mills, Alexandrea Steuber, Magdalena Braun, etc. You can play with it on the Faker demo page.\r\n\r\nIn your typing game, you can use it as a word data source. Later, you’ll build a word generator that constantly emits words for users to type.', '5'),
(7, 'Brampton', 'Brampton', 'The model regarding paragraph length that your teacher undoubtedly taught you involves a topic sentence, a number of facts that support that core idea, and a concluding sentence. The proviso about the number of sentences between the topic sentence and the conclusion was not given to you because it was the magic formula for creating paragraphs of the perfect length; rather, your educator was attempting to give you a good reason to do adequate research on your topic. Academic writing yields the best examples of the topic-support-conclusion paragraph structure', '10'),
(12, 'test', 'test', 'The model regarding paragraph  f sentences between the topic sentence and the conclusion was not given to you because it was the magic formula for creating paragraphs of the perfect length; rather, your educator was attempting to give you a good reason to do adequate research on your topic. Academic writing yields the best examples of the topic-support-conclusion paragraph structure.\n\n\nRecent research has provided a wealth of insight about how dogs came to be domesticated by humans and the roles they played in Native American culture. DNA studies on archaeological finds suggest that dogs may have been domesticated by humans as long as 40,000 years ago. When the first humans came to North America from Eurasia, at least 12,000 years ago, domesticated dogs came with them. They appear to have been highly prized by early North American hunter-gatherers and were their only animal companions for centuries, since there were no horses on the continent until the 16th century.\nYou can see from this example how a topic is introduced, supported, and then brought to its natural conclusion. Yet, not all writing is academic, and once you have learned the concept behind good paragraph construction—which is really the art of focused writing in disguise—you should know that there are times when paragraph “rules” can, and should, be broken.\n\nREAD: Splitting Paragraphs for Easier Reading\n\nHow to write paragraphs people want to read\nThe fact of the matter is that although you may have numerous valid facts or descriptions related to your paragraph’s core idea, you may lose a reader’s attention if your paragraphs are too long. What’s more, if all of your paragraphs are long, you may lose opportunities to draw your reader in. Journalists, for example, know that their readers respond better to short paragraphs. News readers generally lose interest with long descriptions and even one-sentence paragraphs are considered both acceptable and impactful.\n\n\nFirefighters rushed to First Avenue today to extinguish a blaze on the 1500 block. Anguished onlookers hoped that the flames would be subdued in time to rescue the building’s most prized inhabitants.\nThey weren’t.\n\nThe cat hospital was gone.\n\nWhen it comes to maintaining a reader’s attention, a good rule of thumb might be to avoid writing more than five or six sentences in a paragraph before finding a logical place to break. That said, remember that the idea behind a paragraph might be short and sweet, or it might merit deeper explanation. There are no strict rules about how many words or lines your paragraphs should be, and there’s no need to lock your doors if you occasionally write long or short ones. The grammar police aren’t coming for you.\n\n', '1'),
(13, 'Tailwind css', 'Tailwind css', 'Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph.', '5'),
(18, 'New ', 'new', 'asdjas', '1'),
(19, 'sad', 'asda', 'Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph', '1');

-- --------------------------------------------------------

--
-- Table structure for table `passage`
--

CREATE TABLE `passage` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `passage` text NOT NULL,
  `timer` text NOT NULL,
  `cpm` text NOT NULL,
  `wpm` text NOT NULL,
  `error` text NOT NULL,
  `accuracy` text NOT NULL,
  `user` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `single_line_record`
--

CREATE TABLE `single_line_record` (
  `id` int(11) NOT NULL,
  `wpm` text NOT NULL,
  `cpm` text NOT NULL,
  `accuracy` text NOT NULL,
  `error` text NOT NULL,
  `time` text NOT NULL,
  `user` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `single_line_record`
--

INSERT INTO `single_line_record` (`id`, `wpm`, `cpm`, `accuracy`, `error`, `time`, `user`) VALUES
(89, '11', '53', '5', '101', '120s', 'hacker@gmail.com'),
(90, '11', '53', '5', '101', '120s', 'hacker@gmail.com'),
(91, '86', '428', '95', '47', '120s', 'tarun@gmail.com'),
(94, '0', '0', '100', '0', '120s', 'tarun@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `susbcribe_plan_access`
--

CREATE TABLE `susbcribe_plan_access` (
  `id` int(11) NOT NULL,
  `subscription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `susbcribe_plan_access`
--

INSERT INTO `susbcribe_plan_access` (`id`, `subscription`) VALUES
(1, 'off');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `name`, `email`, `password`) VALUES
(NULL, 'sahil', 'sah@gmail.com', 'abcabc'),
(NULL, 'gamer', 'khatri', 'asdf'),
(NULL, 'sahil', 'ak@gmail.com', '2222'),
(NULL, 'harsh', 'harhs@gmail.com', 'harsh'),
(NULL, 'abc', 'abc@gmail.com', 'abcabc'),
(NULL, 'karan', 'karan@gmail.com', 'karan');

-- --------------------------------------------------------

--
-- Table structure for table `testrecord`
--

CREATE TABLE `testrecord` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `wpm` text NOT NULL,
  `cpm` text NOT NULL,
  `accuracy` text NOT NULL,
  `error` text NOT NULL,
  `time` text NOT NULL,
  `user` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testrecord`
--

INSERT INTO `testrecord` (`id`, `title`, `wpm`, `cpm`, `accuracy`, `error`, `time`, `user`) VALUES
(3, 'Theory', '1', '7', ' 14', ' 6', '60s', 'sah@gmail.com'),
(4, 'Theory', '1', '7', ' 14', ' 6', '60s', 'sah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(256) NOT NULL,
  `referenceID` text NOT NULL,
  `referBY` text NOT NULL,
  `referBY_inst` text NOT NULL,
  `subscription` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `password`, `image`, `referenceID`, `referBY`, `referBY_inst`, `subscription`) VALUES
(20, 'surya', 'delhi', 'surya@gmail.com', 'surya', '', '0146840A25', '4ECB902640', '', '5'),
(13, 'Ritika', 'Delhi', 'ritika@gmail.com', 'ritika', 'bride.jpg', 'DDAD405C83', '329B1961DE', '', '10'),
(14, 'arman', 'Delhi', 'arman@gmail.com', 'arman', 'btn.jpeg', '4ECB902640', '329B1961DE', '', '15'),
(12, 'Tarun', 'Delhi', 'tarun@gmail.com', 'tarun', 'mmw.png', '58A555316E', '85FD5CD9BC', '', '15'),
(21, 'Dhoni', 'Delhi', 'dhoni@gmail.com', 'dhoni', '', 'AEB0CCF75A', '36AA2F1665', '', ''),
(22, 'std', 'delhi', 'std@gmail.com', 'std', '', 'B712B72533', '2D4C0A35A0', '', ''),
(23, 'Sidhu', 'Moosa', 'moosa@gmail.com', 'sidhu', '', 'DF36F46522', '85FD5CD9BC', '', ''),
(86, 'boat', 'boiat', 'boat@gmail.com', 'bot', '', '8BC9CAEEB1', 'C2C69FBEF4', '', ''),
(91, 'name', 'delhi', 'name@gmail.com', 'name', 'usergif.png', '0F3FFF643E', '85FD5CD9BC4ECB902640', '', '15'),
(87, 'Bisleri', 'Delhi', 'bisler@gmail.com', 'bisleri', 'person.jfif', 'BADFA97CD7', '2D4C0A35A0', '', '15'),
(88, 'Camaro', 'Canada', 'camaro@gmail.com', 'camaro', 'buy.jpg', 'A3CC6E7D2B', 'D954C2FF5B', '', '15'),
(89, 'bikram', 'canada', 'bikram@gmail.com', 'bikram', 'person.jfif', '4B78D11A0B', '85FD5CD9BC', '', ''),
(90, 'Gippy', 'moga', 'gippy@gmail.com', 'gippy', 'usergif.png', '0BDF7E10FA', '329B1961DE', '', '15'),
(92, 'acer', 'mohali', 'acer@gmail.com', 'acer', 'catoon.png', '659E8DBB36', '36AA2F1665', 'Aquafina Typer', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintestrecord`
--
ALTER TABLE `maintestrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newpassages`
--
ALTER TABLE `newpassages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passage`
--
ALTER TABLE `passage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_line_record`
--
ALTER TABLE `single_line_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `susbcribe_plan_access`
--
ALTER TABLE `susbcribe_plan_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testrecord`
--
ALTER TABLE `testrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `maintestrecord`
--
ALTER TABLE `maintestrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `newpassages`
--
ALTER TABLE `newpassages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `passage`
--
ALTER TABLE `passage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `single_line_record`
--
ALTER TABLE `single_line_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `susbcribe_plan_access`
--
ALTER TABLE `susbcribe_plan_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testrecord`
--
ALTER TABLE `testrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
