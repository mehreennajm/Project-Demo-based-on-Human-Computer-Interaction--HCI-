-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 01:21 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dab`
--

-- --------------------------------------------------------

--
-- Table structure for table `islamic`
--

CREATE TABLE `islamic` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `islamic`
--

INSERT INTO `islamic` (`id`, `title`, `catagory`) VALUES
(1, 'Policy Framework for (AIPSSS) ', 'Regulations'),
(2, 'The Regulation Governing the Reporting and Control of Physical Transfers of Currency ', 'Regulations'),
(3, 'Counter Financing of Terrorism Regulations ', 'Regulations'),
(4, 'Regulation on Financial Leasing 1394 ', 'Regulations'),
(5, 'Regulation on Electronic Fund Transfers ', 'Regulations'),
(6, 'Liquidity Regulation ', 'Regulations'),
(7, 'Related Person Regulation ', 'Regulations'),
(8, 'Capital Adequacy Regulation ', 'Regulations'),
(9, 'AML/CFT Responsibilities and Preventative Measures Regulation ', 'Regulations'),
(10, 'Enforcement Regulation ', 'Regulations'),
(11, 'Electronic Money Institution’s Regulation ', 'Regulations'),
(12, 'Asset Classification and provisioning Regulation ', ''),
(13, 'Regulation on the Secondary Market for Capital Notes ', 'Regulations'),
(14, 'Regulation on Registration of Securing charges (Secured Transaction) ', 'Regulations'),
(15, 'Regulation on Licensing and Oversight of Payment and Securities Transfer Systems (Payment Service OPerator) ', 'Regulations');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descc` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `descc`, `publish`, `expire`) VALUES
(1, 'INTERNSHIP POLICY OF DAB ', ' The internship period is specified as per the application and the need of the academic institutions and in accordance with the relevant procedure which will be prepared by the employees training and development center-DAB. The internship period is of two types:\r\n\r\n4.1 for 20 days\r\n\r\n4.2 for 30 days (one month)', 'Oct 08, 2018 ', 'Oct 20, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `laws`
--

CREATE TABLE `laws` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laws`
--

INSERT INTO `laws` (`id`, `title`, `catagory`) VALUES
(1, 'Da Afghanistan Bank Law ', 'Laws\r\n'),
(2, 'Afghanistan Banking Law ', 'Laws'),
(3, 'Counter Financing of Terrorism ', 'Laws'),
(4, 'Anti-money laundering and proceeds of crime ', 'Laws'),
(5, 'Negotiable Instrument Law ', 'Laws'),
(6, 'Secured Transaction of Movable Propety law ', 'Laws'),
(7, 'Law of Mortgage on Immovable Property', 'Laws');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_27_153308_create-news-table', 1),
(2, '2018_10_30_073735_r', 1),
(3, '2018_10_30_073758_job', 1),
(4, '2018_10_30_073811_report', 1),
(5, '2018_10_30_073828_islamic', 1),
(6, '2018_10_30_073842_laws', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `date`, `created_at`, `updated_at`) VALUES
(1, 'DAB Delegation Meets with IMF Representatives', 'A delegation from Da Afghanistan Bank led by Governor Khalil Sediq visited and conducted discussions with IMF representatives from Sept. 29 to Oct. 2 in Tashkent, Uzbekistan regarding the completion of fourth review of Extended Credit Facility (ECF) program.\r\n\r\nBesides overview of Afghanistan’s economic situation and the successful completion of ECF program, the meeting’s agenda included talks on economic developments notably implementation of quantitative objectives focused on strengthening of macroeconomic stability, assessment of objectives of organizational reforms aimed at strengthening of financial and banking sectors as well as fostering private sector, and a look into macroeconomic indicators and variables such as inflation rate, balance of payments, economic development and FX assets of Afghanistan.\r\n\r\nFollowing review of economic situation of Afghanistan, IMF representative lauded the performances of Afghanistan on successful completion of fourth review of ECF.\r\n\r\nAlongside the delegation from DAB, a delegation from finance ministry led by deputy minister for finance Khalid Payenda and IMF’s country director for Afghanistan Christoph Duenwald and his team were also among the participants in the meeting.', 'Oct 24, 2018 ', NULL, NULL),
(2, 'Audit Committee activity report for the year ended 20 December 2017', ' According to good governance practices, supreme council must have a number of specialized committees in place so as to ensure it performs its duties effectively. One of this committee is an audit committee. This committee is comprised of 3 non executive members appointed by supreme council.\r\n\r\nThe Audit Committee examined DAB’s financial reporting process on behalf of the Board of Directors. The DAB’s management has the primary responsibility for the financial statements, for maintaining effective internal control over financial reporting, and for assessing the effectiveness of internal control over financial reporting. In fulfilling its oversight responsibilities, the Committee reviewed and discussed the audited financial statements, including a discussion of the quality, not just the acceptability, of the accounting principles; the reasonableness of significant judgments; and the clarity of disclosures in the financial statements.\r\n\r\nAudit Committee discharged its responsibilities in accordance with Audit Committee Charter in the year 1396 ( 2017) in areas of internal control effectiveness, sound and transparent financial reporting practices, independent internal audit function, external auditor performance and compliance with applicable laws and regulations.\r\n\r\nInternal audit work plan was reviewed and approved by Audit Committee; The Audit Committee met on four occasions over the course of 2017, all meetings were chaired by Dr. Shah Mohammad Mehrabi attendance of the meetings is part of this report. These meetings, and the main issues discussed are described below:\r\n', 'Oct 02, 2018 ', NULL, NULL),
(3, 'Meeting Held on Coordination between Da Afghanistan Bank and Central Banks of South Asian countries', ' Da Afghanistan Bank hosted the 27th meeting of coordination between the Central Banks of South Asian States. The meeting which was organized in Dubai city of United Arab Emirate on May 12, ended successfully.\r\n\r\nThe acting Governor and first deputy of Da Afghanistan Bank Mr. Wahidullah Nosher extended his gratitude to the participants and said that the South Asian countries are affluent that have played a significant role in the economic development of the world and offered enormous manpower to the world economies.\r\n\r\nIn this meeting, besides discussion on financial capacity building of South Asian countries, supervision of banks, creating facilities in financial transactions, the economic analysis was also considered for the agenda of upcoming meeting that is going to be held in Nepal in the next month. \r\n\r\nWhile thanking the officials of Da Afghanistan Bank for the event, the representatives of participating countries assessed the meeting as valuable and hoped for the next assembly to be held in Kabul.\r\n\r\nIt has to be noted that besides the acting governor and first deputy of DAB Wahidullah Nosher, the director of monetary policy department and the coordinator of SAARC Mr. Sayed Eshaq Alawi, deputy director of MPD and second coordinator of SAARC Mr. Naib Khan Jamal and analyst and regional economies coordinator Mr. Mohammad Daud Niazi were also in attendance in this meeting.  \r\n', 'May 16, 2018 ', NULL, NULL),
(4, 'Da Afghanistan Bank delegation meets IMF representatives', '', ' Oct 31, 2018', NULL, NULL),
(5, 'DAB Governor Participates in World Bank and IMF’s Annual Meeting', 'by delegation attended an annual meeting of World Bank and IMF held from Oct. 8 to 12 in Bali, Indonesia.\r\n\r\nThe meeting was attended by central bank governors, ministers of finance, academic figures, media representatives and a number of private sector members.\r\n\r\nThe meeting begun with the opening speech by IMF’s head Christine Lagarde concerning key global issues such as world economic outlook, financial stability, unemployment, economic development, environment protection and impacts of international assistance.\r\n\r\nIn the press conference, IMF head briefed a research report on world economic situation based on which the world economic growth rate for 2019 is anticipated 2.7 per cent. She stressed that global economy will witness a more stable growth next year.\r\n\r\nOn the sidelines of the meeting, DAB Governor Khalil Sediq participated in various World Bank programs as well as visited chairmen of central banks of SAARC-member states and members of the US treasury.\r\n\r\nIt is important to note that directors of monetary policy department Naib Khan Jamal and financial supervision department Salim Salah were also among the participants in this meeting.\r\n', 'Oct 23, 2018 ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `r`
--

CREATE TABLE `r` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `r`
--

INSERT INTO `r` (`id`, `title`, `catagory`) VALUES
(1, 'Regulations on Licensing to Islamic Bank/Window ', 'Islamic Banking Regulations '),
(2, 'Regulation on Islamic Banking Liquidity Risk Management', 'Islamic Banking Regulations '),
(3, 'Regulation on Capital Adequacy ', 'Islamic Banking Regulations '),
(4, 'Regulation on Asset Classification ', 'Islamic Banking Regulations '),
(5, 'Regulation on Profit Distribution ', 'Islamic Banking Regulations '),
(6, 'Review of DAB’s Regulation on Asset Risk Diversification and Limitations on Large Exposures of Banking Organizations for Islamic Finance ', 'Islamic Banking Regulations '),
(7, 'Regulation on Enforcement Action ', 'Islamic Banking Regulations '),
(8, 'National Shariah Governance Framework(Version for Islamic Window/Unit) ', 'Islamic Banking Regulations '),
(9, 'Product Outline: Murabaha Tawarruq (Cash Financing / Working Capital Financing) ', 'Islamic Banking Regulations '),
(10, 'Murabaha Product Guide ', 'Islamic Banking Regulations '),
(11, 'Guidelines on Ibra’ (Rebate) for Islamic Debt-Based Financing Products 	', 'Islamic Banking Regulations '),
(12, 'Agriculture Financing-Based Product Guide ', 'Islamic Banking Regulations '),
(13, 'Ijarah Product Guide ', 'Islamic Banking Regulations '),
(14, 'Qard Product Guide ', 'Islamic Banking Regulations '),
(15, 'Istisna’ Product Guide ', 'Islamic Banking Regulations ');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `title`, `catagory`) VALUES
(1, 'Financial Statements year Ended 21 December 2017 as of 30- Qawis-1396 ', 'Central Bank Financial Statements '),
(2, 'Financial Statement 30 Dece-2016 as of 30- Qawis-1395 ', 'Central Bank Financial Statements '),
(3, 'Independent auditors’ report for the year ended 30 Qaws 1394 (21 December 2015)', 'Central Bank Financial Statements '),
(4, 'Financial Statements for the year ended 30 Qawes 1393 (21 December 2014) ', 'Central Bank Financial Statements '),
(5, 'Financial Statements for the year ended 30 Qawes 1392 (21 Decenber 2013) ', 'Central Bank Financial Statements '),
(6, 'DAB Audited Financial Statements 29 Hoot 1390 (20 March 2012) ', 'Central Bank Financial Statements '),
(7, 'DAB Audited annual Financial Statements 29 Hoot 1389 (20 March 2011) ', 'Central Bank Financial Statements '),
(8, 'DAB Audited Annual Financial Statements 29 Hoot 1388 (20 March 2010) ', 'Central Bank Financial Statements '),
(9, 'DAB Audited Annual Financial Statements 30 Hoot 1387 (20 March 2009) ', 'Central Bank Financial Statements '),
(10, 'DAB Audited Annual Financial Statements 29 Hoot 1386 (19 March 2008) ', 'Central Bank Financial Statements '),
(11, 'DAB Audited Financial Statements 29 Hoot 1385 (20 March 2007) ', 'Central Bank Financial Statements '),
(12, 'DAB Audited Financial Statements 29 Hoot 1384 (20 march 2006) ', 'Central Bank Financial Statements '),
(13, 'DAB Audited Financial Statements 30 Hoot 1383 (20 March 2005) ', 'Central Bank Financial Statements '),
(14, 'DAB Audited Annual Financial Statements 29 Hoot 1382 (19 March 2004) ', 'Central Bank Financial Statements ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islamic`
--
ALTER TABLE `islamic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laws`
--
ALTER TABLE `laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r`
--
ALTER TABLE `r`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islamic`
--
ALTER TABLE `islamic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laws`
--
ALTER TABLE `laws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `r`
--
ALTER TABLE `r`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
