-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 06:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myphpportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `eid`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123'),
(2, 'Rajdeep', 'rajdeepsingh001rs@gmail.com', 'rajdeep1512');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Sports'),
(2, 'Crime'),
(3, 'World'),
(4, 'Entertainment'),
(5, 'Movies'),
(6, 'Politics'),
(13, 'women'),
(14, 'Technology'),
(15, 'Culture'),
(16, 'Science'),
(17, 'Religious');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(250) NOT NULL,
  `news_date` date NOT NULL,
  `news_description` text NOT NULL,
  `news_category` varchar(50) NOT NULL,
  `news_subcategory` varchar(50) NOT NULL,
  `thumbnail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_date`, `news_description`, `news_category`, `news_subcategory`, `thumbnail`) VALUES
(13, 'Congress Takes Dig At BJP Over \"Copy-Cat\" Manifesto in Chhattisgarh', '2023-11-04', 'New Delhi: The Congress on Saturday dubbed the BJP\'s manifesto for the Chhattisgarh Assembly polls as a \"copy-cat\" one and said those criticising its poll guarantees as \"freebies\" were now themselves pledging guarantees to win elections.\r\nThe BJP released its manifesto on Friday, pledging annual financial assistance to married women and landless agricultural labourers, paddy procurement at ₹ 3,100 per quintal and cooking gas cylinder at ₹ 500 to poor families, among other things.\r\n\r\nSpeaking at a press conference at the AICC headquarters, Congress General Secretary Jairam Ramesh said, \"Yesterday, the BJP came out with its manifesto (in Chhattisgarh). Those who used to criticise \'revdi\' and our guarantees, the PM,...the manifesto that has been released by the BJP is a copy-cat manifesto.\" \r\n\r\n\"The LPG cylinder, paddy procurement prices, these are all Congress poll promises. When Rahul Gandhi ji had used the word guarantee then they (the BJP) had heavily criticised it and now they are talking about \'Modi ki guarantee\',\" Mr Ramesh said.\r\n\r\nUnion Home Minister Amit Shah had released the BJP manifesto titled \'Modi\'s Guarantee for Chhattisgarh 2023\' during a function held at Kushabhau Thakre Parisar, the party\'s state office in Raipur.\r\n\r\nMr Ramesh claimed that the BJP is \"rattled\" in Chhattisgarh and its defeat was \"certain\".\r\n\r\n\"It should also be noted that the BJP is targeting two OBC CMs in Chhattisgarh and Rajasthan. In both states, they are issueless because the welfare schemes of the Congress have been successful and welcomed by the people,\" he said. \r\n\r\n\"On that basis, we will get the people\'s mandate. At the last moment, the PM and his associates are deploying the tactics of defaming Congress leaders to distract people but they will not be distracted,\" Mr Ramesh asserted', 'Politics', 'National', 'TIM231120-Zelensky-CoverFINAL.jpg'),
(14, '\"Cheap Publicity\": Mumbai Police Issue Statement After Uorfi Javed\'s \"Arrest\" Video Goes Viral', '2023-11-04', 'Fashion influencer Uorfi Javed made headlines on Friday after a video of her “arrest” went viral on social media. The clip showed two women dressed as police officers taking Ms Javed into custody allegedly over the length of her outfit. As the video started gaining traction, netizens started speculating the truth behind it. While some called it a prank, others believed the scenario. Now, amid this, the Mumbai Police has issued a strongly worded statement, saying “One can\'t violate law of the land, for cheap publicity!”\r\nThe Mumbai Police took to Instagram and shared a screengrab from Ms Javed\'s viral video. The picture showed two women dressed as police officers. In the caption, the police wrote, “A viral video of a woman being allegedly arrested by Mumbai Police, in a case of obscenity is not true - insignia & uniform has been misused”. \r\nFurther, without taking any names, the Mumbai Police said that a case had been registered against the offenders. An investigation is also underway and the fake officers in the video have been taken into custody. The vehicle that was used in the video has also been seized, the cops said.\r\n\r\n“However, a criminal case has been registered against those involved in the misleading video, at Oshiwara Pstn under sections 171, 419, 500, 34 IPC. While further investigation is on, the fake inspector is under arrest & the vehicle has been seized too,” the caption added. ', 'Crime', 'National', '9cf0a2kg_uorfi-javed-_625x300_03_November_23.webp'),
(15, 'Students Walk Out Of Hillary Clinton\'s Class At Columbia University. Here\'s Why', '2023-11-04', 'Students Walk Out Of Hillary Clinton\'s Class At Columbia University. Here\'s Why\r\nAround 30 students staged a walkout during a lecture held by Hillary Clinton.\r\n\r\n\r\nA group of Columbia University students walked out of a class taught by former Secretary of State Hillary Clinton in protest at the Ivy League college\'s alleged role in the \"shaming\" of pro-Palestine demonstrators. According to The Guardian, around 30 students staged a walkout during a joint lecture held by Ms Clinton and Keren Yarhi-Milo, the dean of Columbia\'s School of International and Public Affairs. The lecture was part of a course on women\'s involvement in peace, which Ms Clinton co-teaches with Ms Keren. \r\nThe outlet reported that the walkout followed an incident last week in which photographs of students who signed a declaration blaming Israel for the October 7 Hamas attacks were displayed on video screens on trucks parked near the university campus above the words \"Columbia\'s biggest antisemites\". According to the protesters, the pictures were lifted from a \"secure and private\" student portal at Columbia\'s School of International and Public Affairs (Sipa).\r\n\r\nOn Thursday, the walkout was planned and peaceful. Ms Clinton was halfway through her two-hour lecture on women\'s involvement in peace processes when the students left and joined several dozen other demonstrators in the lobby of the school, as per the New York Post. They were demanding \"immediate legal support for affected students\" and \"a commitment to student safety, well-being and privacy\". The statement signed by the students also said that the \"weight of responsibility for the war and casualties undeniably lies with the Israeli extremist government.\"\r\nThe Guardian reported that Ms Keren spoke with the protesting students following the lecture and expressed her support for them. Ms Clinton, on the other hand, left the class through a side door and has not publicly addressed the walkout.\r\nLast week, over 100 professors at Columbia University also expressed support for American students who faced criticism from academics and industry leaders due to their endorsement of Hamas\' actions in Israel on October 7. The professors signed a letter defending students and called on administrators to protect those students from \"disturbing reverberations\" on the Manhattan campus.', 'World', '', 'srmkjcv_hillary-clinton_625x300_04_November_23.webp'),
(16, 'Cricket World Cup 2023: Pakistan Pip New Zealand By 21 Runs Via DLS Method To Keep Semi-Final Hopes Alive', '2023-11-04', 'Pakistan defeated New Zealand by 21 runs via DLS method in a rain-hit World Cup game to keep their semifinal hopes alive in Bengaluru on Saturday. Opener Fakhar Zaman played an unbeaten knock of 126 and was well-assisted by skipper Babar Azam (66 not out) during their run chase, which was impacted by intermitted rain. New Zealand had amassed 401 for six in their 50 overs. Following a short spell of rain, Pakistan were set a revised target of 342 in 41 overs. The rain returned in the 26th over with Pakistan cruising at 200 for one but no play was possible thereafter.\r\n\r\nWith the Pakistanis ahead of the DLS par score by 21 runs, they took home two much needed points. The Kiwis had put on a great show with the bat courtesy Rachin Ravindra\'s classy 108 and skipper Kane Williamson\'s 95.\r\n\r\nIt was the fourth successive defeat for the New Zealanders', 'Sports', 'Cricket', 'bgmebt9g_fakhar-zaman-afp_625x300_04_November_23.jpg'),
(17, 'Watch: Yuzvendra Chahal And Dhanashree Verma Duck For Cover As Shreyas Iyer Hits 106m Six', '2023-11-04', 'Riding on some superlative display from the batters as well as the bowlers, the Rohit Sharma-led Indian cricket team decimated the Sri Lanka team by 302 runs. The victory ensured that India is the first team to enter World Cup semi-finals. Batting first, India were boosted by some great show from Virat Kohli, Shubman Gill and Shreyas Iyer.  Virat Kohli missed out on equalling Sachin Tendulkar\'s all-time record of 49 One-Day International hundreds but still helped India to an imposing 357-8 against Sri Lanka as the unbeaten Cricket World Cup 2023 hosts put one foot in the semi-finals on Thursday.\r\n\r\nVirat Kohli made 88 while opener Shubman Gill hit 92 as India looked for a seventh win in seven games and a guaranteed spot in the last-four. The pair were out in quick succession after they had shared a stand of 189 following the second-ball exit of India captain Rohit Sharma. But Shreyas Iyer kept the runs coming at the Wankhede Stadium with a blistering 82 off just 56 balls including six superbly struck sixes. One of his sixes went 106m which the ICC said was the biggest six in the Cricket World Cup 2023 so far. When he hit the six, the ball landed at a place where Indian cricket team star Yuzvendra Chahal and Dhanashree Verma were sitting at the stands. They ducked for cover seeing the huge six.\r\n\r\nHe eventually holed out off Dilshan Madushanka, the left-arm quick finishing with 5-80, as he became the leading bowler at the World Cup with 18 wickets.\r\n\r\nRohit leg-glanced Madushanka\'s first ball of the match for four after India were sent into bat.\r\nBut Madushanka\'s second ball cut off the seam before crashing into Rohit\'s off stump.\r\n\r\nSri Lanka could have had India three wickets down early on but missed both Gill and Kohli.\r\n\r\nGill was on eight when a diving Charith Aslanka dropped a difficult catch at backward point following a slashing drive off Madushanka.\r\n\r\nNext over, Kohli was reprieved on 10 when Dushmantha Chameera was unable to cling on to a return catch off a leading edge\r\n\r\nThose misses proved costly, Kohli completing a run-a-ball fifty featuring eight boundaries.\r\n\r\nGill, keeping pace with Kohli, reached the landmark in 55 balls before hitting the first six of the match when he pulled Chameera over midwicket.\r\n\r\nBut the 24-year-old fell in sight of a hundred when caught behind by wicketkeeper and Sri Lanka skipper Kusal Mendis trying to uppercut Madushanka.\r\n\r\nA near capacity crowd, including Mumbai native and India great Tendulkar, was silenced when Kohli chipped a Madushanka cutter to cover-point.\r\n\r\nIt was a tame end to a 94-ball innings, including 11 fours.\r\n\r\nThe innings was in danger of faltering but Iyer blazed away, with one huge six off paceman Kasun Rajitha carrying over 100 metres.', 'Sports', 'Cricket', '0lgv5fmo_shreyas-iyer-dhanashree_625x300_02_November_23.webp'),
(18, 'Man Kills Wife To Marry Someone Else In Jammu And Kashmir: Cops', '2023-11-04', 'The victim Arti Devi was found dead under suspicious circumstances at her Nandpur residence in Ramgarh area of Samba district on October 27, following which police launched inquest proceedings to ascertain the cause of her death, a police spokesman said.\r\nJammu: A man was arrested for allegedly murdering his wife in Samba district of Jammu and Kashmir so that he could marry a second time, police said on Saturday.\r\nThe victim Arti Devi was found dead under suspicious circumstances at her Nandpur residence in Ramgarh area of Samba district on October 27, following which police launched inquest proceedings to ascertain the cause of her death, a police spokesman said.\r\n\r\nHe said police conducted the inquest proceedings and post-mortem. After collecting evidence and police converted it into a murder case to nail the husband, Gurdeep Singh.\r\nGurdeep Singh was finally arrested, the spokesman said, adding that preliminary investigation suggested that the motive behind committing the alleged murder was to eliminate his wife so that he could marry another woman he was in a relationship with', 'Crime', '', '0htt5beg_india-police-generic_625x300_23_December_22.jpg'),
(19, 'Watch: Panic After US Singer\'s Backpack Explodes Into \'\'Ball Of Fire\'\' On Plane', '2023-11-04', 'A former American Idol contestant shared the terrifying moment when his backpack suddenly caught fire on a JetBlue flight before takeoff. According to the New York Post, Jimmy Levy, who is a singer from Miami, Florida, was on a plane at John F. Kennedy International Airport on Monday when the incident took place. Notably, the singer had kept his backpack underneath the seat in front of him aboard the flight and dozed off. However, he was jolted awake by the intense heat and noticed his backpack was on fire.\r\n\'\'On Monday I faced one of scariest moments of my life. Right after falling asleep pre-takeoff on my flight back home to South Florida from New York, I was jolted awake by a sudden and terrifying wave of heat, seemingly shooting toward my face,\'\' Mr Levy wrote on X, along with a video of the chaotic aftermath. \r\n\r\n\"I immediately opened my eyes and noticed my backpack, which was initially tucked underneath my seat, now in an exploding and floating ball of fire. Acting quickly, I pushed it to the ground and began stomping on it frantically to prevent the blaze from spreading,\'\' he added. \r\n\r\nIn the video, flight attendants and other passengers are seen emptying bottles of water over the drenched backpack on the plane floor and into a metal container. Meanwhile, some passengers were seen scrambling to exit the plane during the chaotic evacuation.\r\nThough the fire was extinguished, all passengers were asked to get off the plane for an investigation. It was discovered that the fire was caused by an overheated portable charger.\r\n\r\n\'\'Please be mindful of where you get your phone products from. In my case, my charger came from a fancy mall in Boca, Florida, but I guess you can\'t trust anything these days,\'\' Mr Levy warned. \r\n\r\nThe singer said he escaped with just a few burns on his hands. He also added that he is \"convinced\" that the situation was a spiritual attack \"from the pits of hell.\"\r\n\r\nA statement from JetBlue said, \'\'On Monday, October 30, JetBlue flight 1401 with scheduled service from New York\'s John F. Kennedy International Airport (JFK) to Fort Lauderdale-Hollywood International Airport (FLL) was evacuated while at the gate before takeoff due to a customer\'s malfunctioning electronic device or battery. \r\n\r\n\"Our crew immediately responded and addressed the situation, and there were no requests for medical assistance. Safety is our number one priority, and we are investigating the incident.\'\'\r\n\r\nNotably, the singer is quite popular on social media, having one million followers on Instagram and more than 120,000 listeners on Spotify. He was a contestant on American Idol season 18 in 2020', 'World', '', 'uct7uas8_backpack-on-fire_625x300_04_November_23.webp'),
(20, '40,000 Operatives, Web Of Tunnels: How Hamas Plans To Trap Israeli Troops', '2023-11-04', 'New Delhi: Hamas has prepared for a long, drawn-out war in the Gaza Strip and believes it can hold up Israel\'s advance long enough to force its arch-enemy to agree to a ceasefire, two sources close to the organization\'s leadership said.\r\nHamas, which rules Gaza, has stockpiled weapons, missiles, food and medical supplies, according to the people, who declined to be named due to the sensitivity of the situation. The group is confident its thousands of fighters can survive for months in a city of tunnels carved deep beneath the Palestinian enclave and frustrate Israeli forces with urban guerrilla tactics, the people told Reuters.\r\n\r\nUltimately, Hamas believes international pressure for Israel to end the siege, as civilian casualties mount, could force a ceasefire and a negotiated settlement that would see the \\group emerge with a tangible concession such as the release of thousands of Palestinian prisoners in exchange for Israeli hostages, the sources said.\r\n\r\nThe group has made it clear to the U.S. and Israel at indirect, Qatar-mediated hostage negotiations that it wants to force such a prisoner release in exchange for hostages, according to four Hamas officials, a regional official, and a person familiar with the White House\'s thinking.\r\n\r\nLonger term, Hamas has said it wants to end Israel\'s 17-year blockade of Gaza, as well as to halt Israeli settlement expansion and what Palestinians see as heavy-handed actions by Israeli security forces at the al-Aqsa mosque, the most sacred Muslim shrine in Jerusalem.\r\n\r\nOn Thursday, U.N. experts called for a humanitarian ceasefire in Gaza, saying Palestinians there were at \"grave risk of genocide\". Many experts see a spiraling crisis, with no clear endgame in sight for either side.\r\n\r\n\"The mission to destroy Hamas is not easily achieved,\" said Marwan Al-Muasher, Jordan\'s former foreign minister and deputy prime minister who now works for the Carnegie Endowment for International Peace in Washington.     \r\n\r\n\"There is no military solution to this conflict. We are in some dark times. This war is not going to be short.\"\r\n\r\nIsrael has deployed overwhelming aerial firepower since the Oct. 7 attack, which saw Hamas gunmen burst out of the Gaza Strip, killing 1,400 Israelis and taking 239 hostages.\r\n\r\nThe Gazan death count has surpassed 9,000, with every day of violence fuelling protests around the world over for the plight of more than 2 million Gazans trapped in the tiny enclave, many without water, food or power. Israeli airstrikes hit a crowded refugee camp in Gaza on Tuesday, killing at least 50 Palestinians and a Hamas commander.\r\n\r\nIsraeli Prime Minister Benjamin Netanyahu vows to wipe out Hamas and has rejected calls for a ceasefire. Israeli officials say they\'re under no illusions about what may lie ahead and accuse the operatives of hiding behind civilians.\r\n\r\nThe country has braced itself for a \"long and painful war\", said Danny Danon, a former Israeli ambassador to the U.N. and ex-member of the Knesset foreign affairs and defense committee.\r\n\r\n\"We know at the end that we will prevail and that we will defeat Hamas,\" he told Reuters. \"The question will be the price, and we have to be very cautious and very careful and understand that it\'s a very complex urban area to maneuver.\"\r\n\r\nThe United States has said now is not the time for a general ceasefire, though says pauses in hostilities are needed to deliver humanitarian aid.\r\n\r\nHAMAS \'FULLY PREPARED\'\r\nAdeeb Ziadeh, a Palestinian expert in international affairs at Qatar University who has studied Hamas, said the group must have had a longer-term plan to follow its assault on Israel.\r\n\r\n\"Those who carried out the Oct. 7 attack with its level of proficiency, this level of expertise, precision and intensity, would have prepared for a long-term battle. It\'s not possible for Hamas to engage in such an attack without being fully prepared and mobilized for the outcome,\" Ziadeh told Reuters.\r\n\r\nWashington expects Hamas to try to bog Israeli forces down in street-by-street combat in Gaza and inflict heavy enough military casualties to also Israeli public support for a drawn-out conflict, said the source familiar with the White House\'s thinking, who asked to remain anonymous to speak freely.\r\n\r\nIsraeli officials have nonetheless stressed to their American counterparts that they\'re prepared to confront Hamas\' guerrilla tactics as well as withstand international criticism of their offensive, according to the person. Whether the country has the capability to eliminate Hamas or merely severely degrade the organization remains an open question, the source added.\r\n\r\nHamas has about 40,000 fighters, according to the sources at the group. They can move around the enclave using a vast web of fortified tunnels, hundreds of kilometers long and up to 80 meters deep, built over many years.\r\n\r\nOn Thursday, operatives in Gaza were seen emerging from tunnels to fire at tanks, then disappearing back into the network, according to residents and videos.\r\n\r\nThe Israeli military says soldiers from its Yahalom special combat engineering unit have been working with other forces to locate and destroy tunnel shafts, during what a spokesman called a \"complex urban fight\" in Gaza.\r\n\r\nHamas has fought a series of wars with Israel in recent decades and Ali Baraka, the Beirut-based head of Hamas\' External Relations, said it had gradually improved its military capabilities, particularly its missiles. In the 2008 Gaza war, Hamas rockets had a maximum range of 40 km (25 miles), but that had risen to 230 km by the 2021 conflict, he added.\r\n\r\n\"In every war, we surprise the Israelis with something new,\" Baraka told Reuters.\r\n\r\nAn official close to the Iranian-backed Lebanese movement Hezbollah, which is allied to Hamas, said the Palestinian group\'s fighting strength remained mostly intact after weeks of bombardment. Hezbollah has a joint military operation room in Lebanon with Hamas and other allied factions in a regional network backed by Iran, according to Hezbollah and Hamas officials.', 'Crime', '', 'jvvgvfd_israelhamas-war-reuters_625x300_04_November_23.webp');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(1, 'football', 1),
(2, 'Cricket', 1),
(3, 'National', 2),
(4, 'International', 2),
(5, 'Hollywood', 5),
(6, 'Bollywood', 5),
(7, 'National', 6),
(9, 'Hockey', 1),
(11, 'webseries', 4),
(12, 'international', 3),
(13, 'world', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
