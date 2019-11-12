-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 04:18 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soccer`
--

-- --------------------------------------------------------

--
-- Table structure for table `soccer_admin`
--

CREATE TABLE `soccer_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(300) NOT NULL,
  `identifier` varchar(10) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soccer_admin`
--

INSERT INTO `soccer_admin` (`id`, `username`, `email`, `phone`, `password`, `identifier`, `reg_time`) VALUES
(1, 'admin', 'admin@gmail.com', '09076451233', '$2y$10$s5Ncy7cJ99iUqWDmDY1pD.WLJQHJ93WCSSsFKkqNlfHXBuNLM53Ke', 'admin', '2018-04-09 16:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `soccer_comments`
--

CREATE TABLE `soccer_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` longtext NOT NULL,
  `uid` mediumtext NOT NULL,
  `t` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soccer_posts`
--

CREATE TABLE `soccer_posts` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `post` longtext NOT NULL,
  `featured_image` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `status_check` int(11) NOT NULL,
  `status_approve` varchar(20) NOT NULL,
  `status_decline` varchar(20) NOT NULL,
  `status_pending` varchar(25) NOT NULL,
  `post_id` varchar(11) NOT NULL,
  `date_of_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soccer_posts`
--

INSERT INTO `soccer_posts` (`id`, `username`, `title`, `post`, `featured_image`, `status`, `status_check`, `status_approve`, `status_decline`, `status_pending`, `post_id`, `date_of_post`) VALUES
(1, 'joshua', 'Barca equal Liga mark with Messi hat trick', 'Lionel Messi fired a hat trick as Barcelona took another big step towards the La Liga title with a 3-1 home win against Leganes.\r\n\r\nMessi opened the scoring with a fine free kick, struck his second before half-time and sealed the win in the closing stages with his 39th goal of the season in all competitions after Nabil El Zhar had pulled one back.\r\n\r\nErnesto Valverde''s side moved 12 points clear at the top of the table, extended their unbeaten league run this season to 31 matches and equalled Real Sociedad''s 38-year-old record of 38 La Liga games without defeat.\r\n\r\nClosest challengers Atletico Madrid take on arch-rivals Real Madrid on Sunday, but there appears to be no stopping Barca, who are now seven games away from completing the first unbeaten La Liga season in history.\r\n\r\nGerard Pique, Philippe Coutinho and Luis Suarez had all gone close before Messi curled home a trademark free kick in the 27th minute after he had been fouled by Dimitrios Siovas.\r\nFive minutes later Messi struck again. Coutinho slipped a clever pass into the Argentina international''s path and after taking the ball in his stride he steered the ball beyond stranded Leganes goalkeeper Ivan Cuellar.\r\n\r\nRuben Perez blazed Leganes'' best first-half chance off target, but Barca took their foot off the gas in the second half and the visitors came more into the match.\r\n\r\nClaudio Beauvue twice threatened with headers and El Zhar was narrowly wide with his headed effort following Darko Brasanac''s cross.\r\n\r\nLeganes pulled a goal back in the 68th minute when El Zhar fired home a low shot from just outside the penalty area, which took a deflection off Sergi Roberto.', 'i.jpg', 0, 11, 'approve', '', '', 'joshua1', '2018-04-10 01:31:53'),
(2, 'joshua', 'Denis must show more than flashes to star in Barca''s revamped midfield', 'Denis Suarez has hardly featured for Barcelona this season, but in just 18 minutes throughout the past week -- spread across two games -- he has played himself into contention to start Saturday''s game against Leganes at Camp Nou.\r\n\r\nBarca coach Ernesto Valverde has played up the importance of beating Leganes. Three points would leave them needing just 12 more to win the Liga title for the third time in four years. Avoid defeat, and they will also match Real Sociedad''s long-standing record of going 38 games unbeaten. They will also remain on track to become the first-ever side to go an entire season unbeaten in Spain''s top flight.\r\n\r\nThose are among the reasons why Valverde is unlikely to make wholesale changes, despite the temptation to rest players in the middle of a hectic run of games.\r\n\r\nHowever, Denis deserves a chance. That''s been said before, mind. Since he rejoined the club from Villarreal in 2016, the midfielder has often impressed in cameos or Copa del Rey games, when he''s been one of the more senior players. But he has usually failed to back up those performances when given a proper first-team start.\r\n\r\nEarlier this season, for example, he tailed off after making big contributions in wins against Getafe and Eibar. That will have to change, though, if he wants to make a career for himself at Barca -- and he protests that he does, despite interest from other clubs.\r\n\r\nDenis was forced into hibernation through the winter months. The last time he started a league game was on Dec. 10. The last time, before last Saturday''s draw against Sevilla, he featured at all in La Liga was on Jan. 14. He came on for one minute against Real Sociedad.', 'iv.jpg', 0, 11, 'approve', '', '', 'joshua1', '2018-04-10 01:31:43'),
(3, 'joshua', 'Barcelona manager Ernesto Valverde: ''We''ve not won anything yet''', 'Barcelona coach Ernesto Valverde has warned that his side have not won anything yet as they look to secure their place in the semifinals of the Champions League on Tuesday night.\r\n\r\nThe Catalans have an 11-point advantage over Atletico Madrid at the top of La Liga. They also have a date with Sevilla in the final of the Copa del Rey and hold a 4-1 lead over Roma from the first leg of their European quarterfinal tie.\r\n\r\nSuccess appears to be around the corner, but Valverde says titles are only awarded when you cross the line, and even if it is in sight, anything can still happen.\r\n\r\n"It seems like we''re already thinking of the semifinals -- no, no, no," Valverde said at a news conference in Rome. "We''ve not won anything yet. We''re still in three competitions and we''re doing well, but we''ve got to focus on getting into the semifinals of the Champions League right now and then we move on.\r\n\r\n"I''ve been in football a long time and you know that extraordinary things can happen in football and we''ve got to ensure nothing extraordinary happens tomorrow. We can''t take to the field thinking they cannot compete with us. Having too much confidence could cost us dearly.\r\n\r\n"We mustn''t think we''ve already won. We''ve got a great result from the first leg, but that''s it. We''ve got to play like it is 0-0 because anything can happen in a game. We''ve got to aim to win the game and not think of anything else."', 'ib.jpg', 0, 11, 'approve', '', '', 'joshua1', '2018-04-10 01:31:31'),
(4, 'joshua', 'Arsenal boosted by Welbeck and Iwobi', 'Another home game and another victory for a somewhat revitalised Arsenal, who have now made it six wins from six following their two disheartening defeats to Man City in February.\r\n\r\nThere''s no specific reason why Arsenal''s form has turned around in this way. It''s a combination of responding to disappointment, playing without much pressure or expectation, plus a series of games against opposition who haven''t been great, and that has allowed Arsene Wenger''s team to put together their best run since the end of last season.\r\n\r\nThe Premier League is now the secondary focus for the Gunners but, to keep momentum and rhythm going for the Europa League campaign, wins are important -- and the Arsenal manager will be pleased that a team with seven changes from the one that beat CSKA Moscow 4-1 last Thursday was capable of doing the job against Southampton.\r\n\r\nThe 3-2 defeat of the Saints isn''t earth-shatteringly important in itself, but the performances of two attacking players in augur particular well for what remains of this season.\r\n\r\nDanny Welbeck -- often the subject of derision for some of his more "Welbeckian" miskicks -- had a fine afternoon, scoring twice and providing an assist for Pierre-Emerick Aubameyang. His late winner came not long after he''d missed a glorious chance to score, failing to connect properly with a Jack Wilshere cut-back just a couple of yards out, and it''s to his credit he didn''t let it affect him.\r\n\r\nWelbeck, who has struggled with injury since moving from Manchester United in 2014, is certainly a favourite of Arsene Wenger who praised his character after the game, saying: "He had every reason to feel sorry for himself, to think this mountain is too big to climb, with the right knee, the left knee, and a year out every time. To continue to go is the most difficult test for any sports person. What he has done is exceptional."\r\n\r\nThere''s no doubt the two serious injuries have taken their toll on Welbeck, but Sunday''s game was a chance for him to show that he still had something to contribute. He certainly did that, not simply from an attacking point of view, but with a really focused defensive display too -- capping what was a superb all-round performance from a wide forward.\r\n\r\nThe other main man was Alex Iwobi, a talented young player who seems to have hit something of a plateau in his development. He''s not alone this season in struggling to find form and consistency -- it''s true of many individuals, and Arsenal as a collective -- but the Nigeria international; seems to have been singled out more than most for criticism.', 'id.jpg', 0, 11, 'approve', '', '', 'joshua1', '2018-04-10 01:31:19'),
(5, 'joshua', 'Mkhitaryan out at least 2 weeks for Arsenal', 'LONDON -- Arsene Wenger says Henrikh Mkhitaryan will be out for at least two weeks with knee ligament damage, but could be back before the end of the season.\r\n\r\nMkhitaryan was injured in Thursday''s 4-1 Europa League quarterfinal first-leg win over CSKA Moscow and a scan on Friday confirmed fears he will face a spell on the sidelines.\r\n\r\n"Mkhitaryan has medial knee ligament damage," Wenger said after Sunday''s 3-2 win over Southampton, ruling him out of Arsenal''s next three matches against CSKA on Thursday, Newcastle on Sunday and West Ham the following weekend.\r\n\r\n"He will miss these games for sure. He could still play at the end of the season."\r\n\r\nArsenal hold a commanding lead over CSKA going into the second leg, but Mkhitaryan''s absence would be a big blow ahead of a possible semifinal.\r\n\r\nThe Armenian won the Europa League last season with Manchester United and was instrumental for Arsenal in wins over AC Milan and Ostersunds in the previous two rounds this term.', 'if.jpg', 0, 11, 'approve', '', '', 'joshua1', '2018-04-10 01:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `soccer_users`
--

CREATE TABLE `soccer_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(300) NOT NULL,
  `identifier` varchar(10) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soccer_users`
--

INSERT INTO `soccer_users` (`id`, `username`, `email`, `phone`, `password`, `identifier`, `reg_time`) VALUES
(1, 'joshua', 'chinedu@yahoo.com', '07031931355', '$2y$10$p1NZRNU.QTn/Bra.xlwmX.WimeU/gPTk6Y6Ab6tO6z4PRyGOujWs.', 'user', '2018-04-10 01:51:45'),
(2, 'chinedu', 'chinedu@yahoo.com', '08171103029', '$2y$10$D5KoswicD3HLhUz7WkQST.XumYp6diUp.2tGm0SsiZ5pmYAkV00Ca', 'user', '2018-04-10 02:14:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soccer_admin`
--
ALTER TABLE `soccer_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soccer_comments`
--
ALTER TABLE `soccer_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soccer_posts`
--
ALTER TABLE `soccer_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soccer_users`
--
ALTER TABLE `soccer_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soccer_admin`
--
ALTER TABLE `soccer_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `soccer_comments`
--
ALTER TABLE `soccer_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `soccer_posts`
--
ALTER TABLE `soccer_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `soccer_users`
--
ALTER TABLE `soccer_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
