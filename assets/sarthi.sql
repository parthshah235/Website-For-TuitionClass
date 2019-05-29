-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2016 at 07:07 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sarthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE IF NOT EXISTS `chapter` (
  `subject_id` int(3) NOT NULL,
  `chapter_id` int(3) NOT NULL AUTO_INCREMENT,
  `chapter` varchar(70) NOT NULL,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`subject_id`, `chapter_id`, `chapter`) VALUES
(1, 1, 'Theoretical Framework'),
(1, 2, 'Accounting Process'),
(1, 3, 'Bank Reconciliation Statement'),
(1, 4, 'Inventories'),
(1, 5, 'Depreciation accounting'),
(1, 6, 'Preparation of Final Accounts for Sole Proprietors'),
(1, 7, 'Accounting for Special Transactions'),
(1, 8, 'Partnership Accounts'),
(1, 9, 'Introduction to Company Accounts'),
(2, 10, 'The Indian Contract Act , 1872'),
(2, 11, 'The Sale of Goods Act, 1930'),
(2, 12, 'The India Partnership Act, 1932'),
(3, 13, 'Introduction to Micro Economics'),
(3, 14, 'Theory of Demand and Supply'),
(3, 15, 'Theory of Production and Cost'),
(3, 16, 'Price Determination in Different Markets'),
(3, 17, 'Indian Economy – A Profile'),
(3, 18, 'Select Aspects of Indian Economy'),
(3, 19, 'Economic Reforms in India'),
(3, 20, 'Money and Banking'),
(4, 21, 'Ratio and proportion, Indices, Logarithms'),
(4, 22, 'Equations'),
(4, 23, 'Inequalities'),
(4, 24, 'Simple and Compound Interest including annuity - Applications'),
(4, 25, 'Basic concepts of Permutations and Combinations'),
(4, 26, 'Sequence and Series - Arithmetic and geometric progressions'),
(4, 27, 'Sets, Functions and Relations'),
(4, 28, 'Limits and Continuity - Intuitive Approach'),
(4, 29, 'Basic concepts of Differential and Integral Calculus'),
(4, 30, 'Statistical description of data'),
(4, 31, 'Measures of Central Tendency and Dispersion'),
(4, 32, 'Correlation and Regression'),
(4, 33, 'Theoretical Distributions'),
(4, 34, 'Sampling Theory'),
(4, 35, 'Index Numbers');

-- --------------------------------------------------------

--
-- Table structure for table `chapter_detail`
--

CREATE TABLE IF NOT EXISTS `chapter_detail` (
  `c_id` int(3) NOT NULL AUTO_INCREMENT,
  `u_id` int(3) NOT NULL,
  `chapter` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `chapter_detail`
--

INSERT INTO `chapter_detail` (`c_id`, `u_id`, `chapter`) VALUES
(1, 1, 'Marketing Planning and Strategies'),
(2, 2, 'Product and Pricing Strategies'),
(3, 3, 'Place and Promotion Strategies'),
(4, 4, 'Contemporary Issues in Marketing'),
(5, 5, 'Introduction'),
(6, 5, 'Customs Duty'),
(7, 6, 'Central Excise'),
(8, 7, 'Service Tax'),
(9, 8, 'Gujarat Value Added Tax'),
(10, 9, 'Introduction to Management Accounting'),
(11, 9, 'Marginal Costing and Break-Even Analysis'),
(12, 10, 'Activity Based Costing'),
(13, 10, 'Service Costing'),
(14, 11, 'Uniform Costing and Inter Firm Comparison'),
(15, 11, 'Budgetary Control'),
(16, 12, 'Standard Costing'),
(17, 12, 'Contemporary Issues and Developments'),
(18, 13, 'Final Accounts of Joint Stock Company'),
(19, 14, 'Cash Flow Statements'),
(20, 14, 'Funds Flow Statement'),
(21, 15, 'Valuation of Goodwill'),
(22, 15, 'Valuation of Shares'),
(23, 16, 'Liquidation of Joint Stock Company');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(3) NOT NULL AUTO_INCREMENT,
  `f_id` int(3) NOT NULL,
  `course` varchar(15) NOT NULL,
  `lumpsum` int(6) NOT NULL,
  `installment` int(6) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `f_id`, `course`, `lumpsum`, `installment`) VALUES
(1, 1, 'First Semester', 2700, 3000),
(2, 1, 'Second Semester', 2700, 3000),
(3, 1, 'Third Semester', 8500, 9000),
(4, 1, 'Fourth Semester', 8500, 9000),
(5, 1, 'Fifth Semester', 9000, 9500),
(6, 1, 'Sixth Semester', 9000, 9500),
(7, 2, 'C.P.T', 20000, 0),
(8, 2, 'I.P.C.C', 40000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(3) NOT NULL AUTO_INCREMENT,
  `exam_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `course_id` int(3) NOT NULL,
  `chapter_id` int(3) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_date`, `course_id`, `chapter_id`) VALUES
(1, '2016-03-28 18:43:25', 7, 1),
(2, '2016-03-28 19:07:27', 7, 1),
(3, '2016-03-28 19:08:30', 7, 1),
(4, '2016-03-28 19:10:47', 7, 1),
(5, '2016-03-28 19:18:58', 7, 1),
(6, '2016-03-28 19:23:25', 7, 1),
(7, '2016-03-29 03:15:55', 7, 1),
(8, '2016-03-29 03:24:19', 7, 1),
(9, '2016-03-29 03:27:47', 7, 1),
(10, '2016-03-29 03:33:27', 7, 1),
(11, '2016-03-29 03:33:41', 7, 1),
(12, '2016-03-29 03:34:18', 7, 1),
(13, '2016-03-29 03:34:55', 7, 1),
(14, '2016-03-29 03:39:38', 7, 1),
(15, '2016-03-29 03:48:26', 7, 1),
(16, '2016-03-29 04:01:05', 1, 1),
(17, '2016-03-29 04:22:43', 7, 1),
(18, '2016-03-29 04:24:33', 1, 1),
(19, '2016-03-29 04:25:09', 1, 1),
(20, '2016-03-29 04:33:31', 1, 1),
(21, '2016-03-30 06:25:17', 1, 1),
(22, '2016-03-31 04:58:11', 1, 1),
(23, '2016-03-31 04:59:08', 1, 1),
(24, '2016-03-31 06:17:48', 1, 1),
(25, '2016-03-31 07:20:55', 7, 1),
(26, '2016-04-01 14:22:58', 7, 1),
(27, '2016-04-03 06:23:31', 1, 1),
(28, '2016-04-06 06:23:21', 1, 1),
(29, '2016-04-06 06:26:55', 7, 1),
(30, '2016-04-08 04:12:33', 7, 1),
(31, '2016-04-29 18:53:42', 7, 1),
(32, '2016-04-30 09:51:59', 4, 1),
(33, '2016-04-30 09:52:30', 4, 1),
(34, '2016-04-30 10:20:18', 7, 1),
(35, '2016-05-01 10:25:16', 7, 1),
(36, '2016-05-01 10:43:23', 7, 1),
(37, '2016-05-01 12:40:12', 0, 0),
(38, '2016-05-02 06:54:01', 4, 10),
(39, '2016-05-02 06:54:33', 4, 10),
(40, '2016-05-03 13:03:27', 7, 1),
(41, '2016-05-04 05:41:34', 4, 10),
(42, '2016-05-04 09:11:12', 7, 1),
(43, '2016-05-04 09:12:04', 7, 1),
(44, '2016-05-04 09:16:17', 7, 1),
(45, '2016-05-04 09:17:16', 7, 1),
(46, '2016-05-04 09:17:37', 7, 1),
(47, '2016-05-04 09:19:01', 7, 1),
(48, '2016-05-04 09:19:19', 7, 1),
(49, '2016-05-04 09:28:32', 7, 1),
(50, '2016-05-04 09:30:00', 7, 1),
(51, '2016-05-04 09:33:06', 7, 1),
(52, '2016-05-04 09:34:54', 7, 1),
(53, '2016-05-04 09:49:28', 7, 1),
(54, '2016-05-06 09:05:20', 8, 0),
(55, '2016-05-06 09:25:51', 4, 1),
(56, '2016-05-07 00:52:32', 7, 21);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_registration`
--

CREATE TABLE IF NOT EXISTS `faculty_registration` (
  `f_id` int(3) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `f_phone` int(10) NOT NULL,
  `f_email` varchar(30) NOT NULL,
  `f_address` varchar(100) NOT NULL,
  `f_qualification` varchar(100) NOT NULL,
  `f_experience` varchar(100) NOT NULL,
  PRIMARY KEY (`f_id`),
  UNIQUE KEY `f_email` (`f_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty_registration`
--

INSERT INTO `faculty_registration` (`f_id`, `f_name`, `f_phone`, `f_email`, `f_address`, `f_qualification`, `f_experience`) VALUES
(1, '', 0, 'bhavinshah191077@gmail.com', '', '', ''),
(2, '', 0, 'bhagwanimohan@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(5) NOT NULL AUTO_INCREMENT,
  `login_uname` varchar(35) NOT NULL,
  `login_pwd` varchar(32) NOT NULL,
  `login_type` varchar(10) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `login_uname_3` (`login_uname`),
  KEY `login_uname` (`login_uname`),
  KEY `login_uname_2` (`login_uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_uname`, `login_pwd`, `login_type`, `creation_date`, `status`) VALUES
(1, 'bhavinclass@gmail.com', '66c3bdffbbe7048c63d0945dda7188b5', 'admin', '2016-05-04 09:55:49', 'valid.png'),
(2, 'bhavinshah191077@gmail.com', '66c3bdffbbe7048c63d0945dda7188b5', 'faculty', '2016-05-06 19:24:58', 'valid.png'),
(3, 'bhagwanimohan@gmail.com', '2fcf7d178e8c50db86c1cdcdd84e4e4e', 'faculty', '2016-04-29 18:42:10', 'valid.png'),
(4, 'sachinmore172@gmail.com', '0162a164884f019c25ab1326bb2ce666', 'student', '2016-05-01 13:17:04', 'valid.png'),
(5, 'pkrutika1995@gmail.com', 'cd008466eaaebe2051c477b651b4fd79', 'student', '2016-04-29 18:43:16', 'valid.png'),
(6, 'kushal17995@gmail.com', '2c23c1cb114b5093d0c0612655f79be0', 'student', '2016-04-29 18:43:48', 'valid.png');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_detail`
--

CREATE TABLE IF NOT EXISTS `mcq_detail` (
  `course_id` int(3) NOT NULL,
  `chapter_id` int(3) NOT NULL,
  `qu_no` int(5) NOT NULL AUTO_INCREMENT,
  `question` varchar(700) NOT NULL,
  `A` varchar(400) NOT NULL,
  `B` varchar(400) NOT NULL,
  `C` varchar(400) NOT NULL,
  `D` varchar(400) NOT NULL,
  `answer` varchar(400) NOT NULL,
  `solution` varchar(500) NOT NULL,
  PRIMARY KEY (`qu_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `mcq_detail`
--

INSERT INTO `mcq_detail` (`course_id`, `chapter_id`, `qu_no`, `question`, `A`, `B`, `C`, `D`, `answer`, `solution`) VALUES
(4, 10, 1, 'Management accounting is an extension of :', 'financial accounting', 'cost accounting ', 'product costing', 'financial management', '(c) product costing', 'Answer is c'),
(4, 10, 2, 'The true and fair view of the overall results of the entity''s transactions is presented in:', 'cost accounting', 'management accounting ', 'financial accounting', 'financial management', '(d) financial management', 'Answer is d'),
(4, 10, 3, 'The adoption and analysis of accounting information and its diagnosis and explanation 	in such a way as to assist management is done with:', 'management accounting	', 'management information system', 'cost accounting', 'financial accounting', '(a) management accounting', 'Answer is a'),
(4, 10, 4, 'The decision making needs of the management is met through.', 'cost accounting', 'forensic accounting ', 'management accounting', 'futuristic management', '(b) forensic accounting ', 'Answer is b'),
(4, 10, 5, '__________ accounting records and analyzes business events long after they have taken place.', 'Cost', 'financial', 'management ', 'managerial', '(b) financial', 'Answer is b'),
(4, 10, 6, '__________ accounting provide methods and techniques for evaluating the performance of the management in the light of  the objectives of the enterprise, thus 	assisting in of the implementation of the principle ''management'' by objectives.', ' financial', 'Cost', 'management ', 'activity  based', '(c) management ', 'Answer is c'),
(4, 10, 7, 'Pin pointing the significant deviations between actual and expected activities suggesting appropriate corrective measures in deserving cases is called.', 'management by exception', 'exception accounting  ', 'management by objectives', 'forensic management', '(a) management by exception', 'Answer is a'),
(4, 10, 8, '___________ Accounting makes corporate planning and strategy effective and meaningful.', 'financial', 'cost', 'management', 'responsibility', '(c) management', 'Answer is c'),
(4, 10, 9, 'One of the following is not with in the scope of Management Accounting.', 'classification and collection of costs', 'formulation of policies  ', 'planning and coordinating the activities of the enterprise', 'decision making on alternative courses of action', '(a) classification and collection of costs', 'Answer is a'),
(4, 10, 10, 'The__________ Accounting needs to be dynamic and forward looking.', 'cost ', 'management', 'financial', 'product', '(b) management', 'Answer is b'),
(4, 10, 11, '__________accounting helps the organization prepare long-term plans, formulate corporate strategy and forecast and evaluate competitors.', 'strategic management', 'management ', 'cost', 'financial', '(a) strategic management', 'Answer is a'),
(4, 10, 12, '_________accounting serves not only as a tool in the hands of management, but also provides for a technique evaluating the performance of the management itself.', 'cost', 'financial', 'divisional', 'management', '(d) management', 'Answer is d'),
(4, 10, 13, 'Management accounting information to be inadequate compared to strategic management because ', 'It reported only certain technical data and lacked any objective assessment.', 'It offered merely certain budgetary picture and control systems.', 'It lacked a future projection of company''s position.', 'It reports pool of historical figures which are not adequate for future decision 	making purpose.', '(d) It reports pool of historical figures which are not adequate for future decision  making purpose', 'Answer is d'),
(4, 11, 14, 'The method in which fixed as well as variable costs are allotted to cost units and total overheads are absorbed according to activity level is called:', 'direct costing', 'unit costing', 'absorption costing ', 'marginal costing', '(c) absorption costing ', 'Answer is c'),
(4, 11, 15, 'Variable cost of one unit of product of a service i. e. a. cost which would be avoided if that unit was not produced is called.', 'Marginal cost', 'marginal costing   ', 'unit cost', 'unit costing', '(a) Marginal cost', 'Answer is a'),
(4, 11, 16, 'Marginal costing is also known as:', 'direct  costing', 'absorption  costing   ', 'variable cost  ', 'variable  costing', '(d) variable  costing', 'Answer is d'),
(4, 11, 17, 'The difference between sales volume and the marginal sales is called:', 'Contribution', 'profit', 'variable', 'fixed cost', '(a) Contribution', 'Answer is a'),
(4, 11, 18, 'Contribution minus fixed cost is equal to:', 'Variable Cost', 'unit cost', 'marginal cost  ', 'profit', '(b) unit cost', 'Answer is b'),
(4, 11, 19, 'If the fixed cost fixed cost exceeds the amount of contribution results in:', 'profit', 'loss', 'surplus', 'deficit ', '(b) loss', 'Answer is b'),
(4, 11, 20, 'In ''make of buy'' decisions it is profitable to buy form outside only when the suppliers price is below the firms own.....', 'fixed cost', 'variable cost   ', 'contribution', 'profit', '(b) variable cost   ', 'Answer is b'),
(4, 11, 21, 'Use of ................ costing method valuation of finished making inventory provides 	incentive for over production.', 'absorption', 'marginal ', 'direct', 'variable', '(a) absorption', 'Answer is a'),
(4, 11, 22, 'The ................. costing technique helps in decision making and also in controlling costs.', 'absorption', 'marginal', 'direct', 'output', '(b) marginal', 'Answer is b'),
(4, 11, 23, 'The marginal costing technique suggests that if the existing operations are able to earn 	at least same ........... to met fixed costs, should continue with operations.', 'Profit', 'margin', 'amount ', 'contribution', '(d) contribution', 'Answer is d'),
(4, 11, 24, 'In ............. decisions choice is to be made between making a part or article within the company or purchasing it form outside.', 'key factor', 'product mix   ', 'make or buy', 'profitability analysis', '(c) make or buy  ', 'Answer is c'),
(4, 11, 25, 'in ............. costing, a fixed percentage is added to total cost to cover profit.', 'cost plus ', 'absorption', 'marginal', 'contract', '(a) cost plus ', 'Answer is a'),
(4, 11, 26, 'In Marginal costing, the stock of work - in progress and finished goods are valued at cost of production.', 'Fixed', 'absorption', 'variable', 'unit', '(c) variable', 'Answer is c'),
(4, 11, 27, 'The technique of ........... costing is more used to provide a reasonable and sound basis for managerial decisions than to arrive at product cost.', 'marginal', 'uniform', 'product', 'output', '(a) marginal', 'Answer is a'),
(4, 11, 28, 'In marginal cost, fixed costs are attributable to the relevant period and are written off in full against the ............ for that period.', 'Profit', 'revenue', 'contribution ', 'earnings', '(c) contribution ', 'Answer is c'),
(4, 11, 29, 'Under marginal costing the difference in the magnitude of opening stock and closing stock does not affect the ........... cost of production since all the product costs are variable costs.', 'marginal', 'total', 'unit', 'variable', '(c) unit', 'Answer is c'),
(4, 11, 30, 'Contribution is known as:', 'marginal income', 'gross profit   ', 'net income  ', 'none of the above', '(a) marginal income', 'Answer is a'),
(4, 11, 31, 'A basic cost accounting method, in which fixed factory overbear is added to inventory is.', 'direct  costing', 'variable costing   ', 'absorption', 'process costing', '(c) absorption', 'Answer is c'),
(4, 11, 32, 'The ............... costing method conforms with the accounting standards.', 'direct', 'marginal', 'absorption ', 'responsibility ', '(c) absorption ', 'Answer is c'),
(4, 11, 33, 'costing requires separation of costs into fixed and variable elements.', 'marginal', 'absorption', 'direct', 'target', '(a) marginal', 'Answer is a'),
(4, 11, 34, 'In ................ costing all indirect costs are charged to Profit and Loss Account of the period in which they arise.', 'direct', 'marginal', 'absorption', 'target', '(a) direct', 'Answer is a'),
(4, 11, 35, '................ costing reduce the possibility of under pricing.', 'Marginal', 'variable ', 'absorption', 'direct', '(c) absorption', 'Answer is c'),
(4, 11, 36, 'A company''s approach the company is operating at or below normal value', 'epiphany''s approach to a make the company is operating at or below normal value', 'involves an analysis of avoidable costs   ', 'should use absorption (full) costing', 'should use activity based costing', '(b) involves an analysis of avoidable costs   ', 'Answer is b'),
(4, 11, 37, 'A three product, three limiting factor problem requires which of the following techniques to find profit maximizing product mix?', 'linear programming', 'graphical  presentation  of constraints', 'use of a profit volume graph', 'all of the above', '(a) linear programming', 'Answer is a'),
(4, 11, 38, 'For a given period profit under absorption costing is less than the profit under marginal costing if.', 'production is more tan sales', 'production is equal to sales  ', 'Sales are more than production ', 'Closing stock is more than opening stock', '(c) Sales are more than production ', 'Answer is c'),
(4, 11, 39, 'Automat makes a special gadget for the cars it produces. The machine for the gadget works to full capacity and incurs Rs. 15 lakh and Rs. 40 lakh respectively as variable and fixed costs if all the gadgets', 'Rs.40h lakh', 'Rs.65 lakh   ', 'Rs.25 lakh ', 'Rs.15 lakh', '(a) Rs.40h lakh', 'Answer is a'),
(4, 11, 40, 'Which of the following concept is known as cost behavior - oriented to product Costing.', 'standard costing  ', 'marginal costing   ', 'process costing  ', 'absorption costing', '(b) marginal costing   ', 'Answer is b'),
(4, 11, 41, 'Under marginal costing technique, marginal cost is equal to.', 'Fixed Cost + variable  Cost ', 'Direct Material Cost+ Direct Wages+ Direct Expenses	', 'Prime Cost + Variable Overhead ', 'Factory Overhead + Office Overhead + Selling and Distribution Overhead.', '(c) Prime Cost + Variable Overhead ', 'Answer is c'),
(4, 11, 42, 'Marginal costing technique follows the following basis of classification of costs:', 'Behavior -wise', 'Element- wise  ', 'Function - wise  ', 'Identifiability - wise', '(a) Behavior -wise', 'Answer is a'),
(4, 11, 43, 'Contribution Margin is equal to: ', 'Fixed cost- variable', 'Sales - variable cost', 'Sales - Fixed cost', 'Sales - profit ', '(d) Sales - profit ', 'Answer is d'),
(4, 11, 44, 'Variable Cost:', 'Remains fixed in total', 'Varies per unit', 'Remains fixed per unit  ', 'Neither increases nor decreases.', '(c) Remains fixed per unit  ', 'Answer is c'),
(4, 11, 45, 'If sales are Rs.1,00,000 and variable costs are rs.60,000, P/V Ratio is', '40%', '60%', '20%', '10%', '(a) 40%', 'Answer is a'),
(4, 11, 46, 'If sales are Rs.80,000 and variable cost to sales is 70% contribution is:', 'Rs.56,000', 'Rs. 24,000   ', 'Rs.70,000  ', 'Rs.30,000', '(b) Rs. 24,000', 'Answer is b'),
(4, 11, 47, 'Break even Point is:', 'Profit / PV Ratio', 'Total variable cost / PV Ratio', 'Sales /PV Ratio  ', 'Total Fixed cost/ Cost / PV Ratio', '(d) Total Fixed cost/ Cost / PV Ratio', 'Answer is d'),
(4, 11, 48, 'Margin of safety is:', 'Actual Sales - Sales at Break - even Point', 'Sales - Contribution', 'Sales - Fixed Cost ', 'Fixed Cost + Variable Cost', '(a) Actual Sales - Sales at Break - even Point', 'Answer is a'),
(4, 11, 49, 'PA/ Ratio will increase it.', 'There is an increase in fixed cost', 'There is decrease in fixed cost', 'There is decrease in variable cost per unit', 'There is a decrease in selling price per unit', '(c) There is decrease in variable cost per unit', 'Answer is c'),
(4, 12, 50, 'Activity Based Costing identifies the activities which cause to be incurred and trace _____of these activities.', 'cost pools', 'cost drivers ', 'cost objects  ', 'cost centre', '(b) cost drivers ', 'Answer is b'),
(4, 12, 51, 'If is possible to ascertain most accurate and realistic product cost by adopting.', 'activity  based accounting', 'activity based management', 'activity based information', 'activity based costing', '(d) activity based costing', 'Answer is d'),
(4, 12, 52, 'In Activity Based Costing, costs are accumulated by:', 'cost objects ', 'Cost benefit analysis  ', 'cost pool', 'none of the above', '(c) cost pool', 'Answer is c'),
(4, 12, 53, 'The appropriate Cost driver for maintenance cost pool is;', 'no. of customers ', 'no. of setups  ', 'no. of machine hours ', 'no. of deliveries', '(b) no. of setups  ', 'Answer is b'),
(4, 12, 54, '_________ is the final to which costs are  traced.', 'Cost object  ', 'Cost pool   ', 'Cost object  ', 'Cost activity ', '(a) Cost object  ', 'Answer is a'),
(4, 12, 55, 'In tracing costs to products by using a measure of resource consumed by each activity 	_______ is used.', 'cost driver ', 'Cost pool   ', 'Cost object  ', 'Cost unit', '(a) cost driver ', 'Answer is a'),
(4, 12, 56, 'Costs are grouped into _________ according to the activities which drive them:', 'cost driver ', 'Cost object   ', 'Cost pool  ', 'Cost unit', '(c) Cost pool  ', 'Answer is c'),
(4, 12, 57, 'Activity Based Costing is defined as cost attribution to _______ on the basis of benefit received from indirect activities.', 'cost unit  ', 'Cost pool', 'Cost object', 'Cost driver ', '(a) cost unit  ', 'Answer is a'),
(4, 12, 58, 'Under ABC system, the aggregate of closely related tasks is called _______ ', 'Pool', 'Cost unit   ', 'activity ', 'driver', '(c) activity ', 'Answer is c'),
(4, 12, 59, 'The cost pools and cost driver are used to assign indirect costs to ________', 'cost unit ', 'Cost objects', 'Cost centers  ', 'production units', '(b) Cost objects   ', 'Answer is b'),
(4, 12, 60, 'The point of focus for the costs relating to a particular activity in Activity Based Costing system is called:', 'cost system  ', 'Cost ascertainment    ', 'Cost object  ', 'cost pool', '(d) cost pool', 'Answer is d'),
(4, 12, 61, 'The method in which cost attribution to cost units on the basis of benefits received from indirect and activities is called:', 'activity based accounting ', 'activity based budgeting   ', 'activity based costing   ', 'activity based management', '(c) activity based costing   ', 'Answer is c'),
(4, 12, 62, 'Under traditional cost system, direct costs are ________ to the units of output in 	proportion to the volume of production.', 'allotted', 'apportioned ', 'added', 'allocated', '(d) allocated', 'Answer is d'),
(4, 12, 63, '______ deals with collection, recording, analysis, controlling and reporting of activity related costs rather than departmental of cost centre related costs.', 'activity based accounting', 'activity based costing  ', 'activity based budgeting  ', 'activity based management', '(a) activity based accounting', 'Answer is a'),
(4, 12, 64, 'The identification and aggregation of closely related task under ABC system is called:', 'objects', 'activities', 'pools', 'drivers', '(b) activities', 'Answer is b'),
(4, 12, 65, 'The management philosophy that focuses on the planning and measurement of activities as the key to the competitive advantage is called: ', 'activity based budgeting', 'activity based costing  ', 'activity based MIS	', 'activity based management', '(d) activity based management', 'Answer is d'),
(4, 12, 66, 'Cost pools under ABC are similar to _________ in traditional cost system.', 'cost unit', 'cost object   ', 'machine centre   ', 'cost centre', '(d) cost centre', 'Answer is d'),
(4, 13, 67, 'The costing method useful for a transport company is', 'operation costing ', 'operating costing', 'process costing (single costing)', 'single costing', '(b) operating costing', 'Answer is b'),
(4, 13, 68, 'Service costing is also of the known as _____ costing.', 'output ', 'operating ', 'operating', 'continues process', '(c) operating', 'Answer is c'),
(4, 13, 69, 'In transport costing one of the following will not be used as composite unit:', 'Number of miles run', 'passenger mile ', 'Passenger kilometer  ', 'ton kilometer', '(a) Number of miles run', 'Answer is a'),
(4, 13, 70, 'Boiler house costing is an example of;', 'Process costing ', 'in-house costing ', 'service costing ', 'output', '(a) Process costing ', 'Answer is a'),
(4, 13, 71, 'Service costing is not used in one of the following;', 'electricity ', 'hospitals ', 'transport ', 'electronic', '(d) electronic', 'Answer is d'),
(4, 13, 72, 'kilowatt hour is used as a composite cost unit by the ________ company.', 'boiler house ', 'transport  ', 'electricity supply ', 'coal extraction', '(c) electricity supply ', 'Answer is c'),
(4, 13, 73, 'Maintenance charges like tires and tubes, repairs and paintings overhauls etc. are in the nature of.', 'variable expenses ', 'fixed expenses ', 'semi -variable expenses ', 'running expenses', '(c) semi -variable expenses ', 'Answer is c'),
(4, 13, 74, 'In transport costing ________ will not in direct proportion to kilometers run.', 'Operating expenses ', 'standing expenses    ', 'Running expenses  ', 'direct expenses', '(b) standing expenses    ', 'Answer is b'),
(4, 13, 75, 'A transport service company is running 4 buses between two towns/the distance of which as 50 kms. Seating capacity of each bus is 40 passengers. The seating capacity utilized was 75% . All the four buses run on all days of the month. Each bus had made 	one round trip daily. The number of passenger kms is;', '3,60,000 ', '1,20,000     ', '2,40,000    ', '3,20,000', '(a) 3,60,000 ', 'Answer is a'),
(4, 13, 76, 'If the present cost of the car is Rs. 50,000 residual value at the end of the 5th year is Rs. 10,000, the monthly depreciation is___', 'Rs. 8,000 ', 'Rs. 667     ', 'Rs. 8,667   ', 'none of the above', '(b) Rs. 667     ', 'Answer is b'),
(4, 13, 77, 'A bus carries 25 passengers daily for 25 days and its mileage per month is 2,000 kms. its passenger miles are _______', '60,000 ', '25,000   ', '40,000    ', '50,000', '(d) 50,000', 'Answer is d'),
(4, 13, 78, 'The distance covered by a tourist bus between Delhi to Chandigarh and back on the same day is 150 kms. one way. The bus will make 8 trips in a month with an occupancy of 90%. The seating capacity of the bus is 50. The total passenger - kms in a month are____', '1,00,000 ', '1,08,000     ', '1,20,000    ', '90,000', '(b) 1,08,000     ', 'Answer is b'),
(4, 13, 79, 'A hotel has a capacity of 100 single rooms and 20 double rooms. The average occupancy of both single and double rooms is expected to be 80% throughout the year'' the total notional single rooms /day are _____ . The rent of double room has been fixed at 125% of the rent of a single room.', '36,500 ', '35,040     ', '29,200   ', '5,840', '(a) 36,500 ', 'Answer is a'),
(4, 13, 80, 'The hospital is opened for 365 days. but bed occupancy is 25 patients per day in 120h days; and 20 beds occupied in another 80 days. Extra beds occupied during the year are 400. The patient - days of the hospital is _____', '4,000 ', '5,000     ', '3,500  ', '4,600', '(b) 5,000     ', 'Answer is b'),
(7, 1, 81, 'The determination of expense for an accounting period is based on the principle of ', 'Objectivity', 'Materiality', 'Matching', 'Periodicity', '(c) Matching', 'Answer is c'),
(7, 1, 82, 'Revenue from sale of products is generally recognized in the period in which', 'Cash is collected	', 'Sale is made', 'Products are manufactured', 'None of the above', '(b) Sale is made', 'Answer is b'),
(7, 1, 83, 'A change in accounting policy is justified', 'To ensure more appropriate preparation & presentation of financial statements', 'To comply with accounting standards', 'To comply with law or statute', 'All of the above', '(d) All of the above', 'Answer is d'),
(7, 1, 84, 'If a purchase return of Rs.156 has been wrongly posted to the debit of the sales return account, but had been correctly entered in the supplier’s account, the total of the trial balance would show', 'The credit side to be Rs.156 more than the debit side', 'The debit side to be Rs.156 more than the credit side', 'The credit side to be Rs.312 more than the debit side', 'The debit side to be Rs.312 more than the credit side', '(d)	The debit side to be Rs.312 more than the credit side', 'Answer is d'),
(7, 1, 85, 'A change in accounting estimate means', 'Difference arising between certain parameters estimated earlier and re estimated during the current ', 'Difference arising between certain parameters estimated earlier and the actual results achieved duri', 'Difference arising between certain parameters re estimated during the current period and actual resu', 'Both (a) and (b) 	', '(d)	Both (a) and (b) 	', 'Answer is d'),
(7, 1, 86, 'Contra entries are passed only when', 'Double column cash book is prepared', 'Three column cash book is prepared', 'Simple cash book is prepared', 'None of the above', '(b)Three column cash book is prepared', 'Answer is b'),
(7, 1, 87, 'Present liability of uncertain amount which can be measured reliably by using substantial degree of estimation is termed as', 'Provision', 'Liability', 'Contingent liability', 'None of the above', '(a)	Provision', 'answer is a'),
(7, 1, 88, 'Under inflationary condition,______ method will show highest value of closing inventory.', 'FIFO', 'LIFO', 'Weighted average', 'None of the above', '(a)FIFO', 'answer is a'),
(7, 1, 89, 'In case of downward revaluation of an asset, which is for the first time revalued, _____ is debited.', 'Fixed Asset', 'Revaluation Reserve', 'Profit & Loss A/c', 'General Reserve', '(c) Profit & Loss A/c', 'Answer is c'),
(7, 1, 90, 'If a concern proposes to discontinue its business from March 2009 & decides to dispose of all its assets within a period of 4 months, the Balance Sheet as on March 31, 2009 should indicate the assets at their', 'Historical cost', 'Net Realizable Value', 'Cost less depreciation', 'Cost price or Market Value, whichever is lower', '(b)	Net Realizable Value', 'Answer is b'),
(7, 1, 91, 'Mohan purchased goods for Rs.1500000 and sold 4/5th of the goods for Rs.1800000 and paid expenses amounting to Rs.270000 during the year 2009. He paid Rs.5000 for an electricity bill of Dec.2008 and advance salaries amounting to Rs.15000 for Jan 2010. He counted net profit as Rs.350000.', 'Entity Concept', 'Periodicity concept', 'Matching concept', 'Conservatism concept', '(c) Matching concept	', 'Answer is c'),
(7, 1, 92, 'All of the following are functions of accounting except', 'Decision making	', 'Measurement', 'Forecasting', 'Ledger posting', '(c) Forecasting', 'Answer is c'),
(7, 1, 93, 'Accounting policies refer to specific accounting ', 'Principles', 'Methods of applying those principles', 'Both (a) and (b) ', 'None of the above', '(c) Both (a) and (b) ', 'Answer is c'),
(7, 1, 94, 'M/s ABC brothers has been following SLM method of depreciation. In the current year it changed the method to WDV. Since such change would result in the additional depreciation of Rs.200 lakhs as a result of which the firm would qualify to be declared a sick industrial unit. The auditor raised objection to the change in method of depreciation. He is justified because', 'Change in method of depreciation should be done only with the consent of the auditor', 'Depreciation method can be changed only from WDV to SLM & not V/v.', 'Change in the method of depreciation should be done only if it is required by some statute or AS and', 'Method of depreciation cannot be changed under any circumstances', '(c)	Change in the method of depreciation should be done only if it is required by some statute or AS', 'Answer is c'),
(7, 1, 95, 'If sales revenues are Rs.400000. COGS is Rs.310000. Operating expenses are Rs.60000. The Gross profit is', 'Rs.30000', 'Rs.90000', 'Rs.150000', 'Rs.60000', '(b) Rs.90000', 'Answer is B'),
(7, 1, 96, 'Opening Inventory 	Rs.20000	Carriage on sales 	Rs.3000 Closing Inventory		Rs.18000	Rent of office 		Rs.5000 Purchases			Rs.85800	Sales 			Rs.140700 Carriage on purchase	Rs.2300 Gross profit will be', 'Rs.50000', 'Rs.47600', 'Rs.42600', 'Rs.50600', '(d) Rs.50600', 'Answer is d'),
(7, 1, 97, 'When adjusted purchase is shown on the debit column of the trial balance then', 'Both opening &  closing inventory do not appear in trial balance', 'Only closing inventory is shown', 'Only opening inventory is shown', 'Both opening inventory and closing inventory appear in the trial balance', '(c)	Only opening inventory is shown', 'Answer is c'),
(7, 1, 98, '“Business unit is separate and distinct from the person who supply capital to it” , is based on', 'Money measurement concept', 'Going concern concept', 'Business entity concept', 'Dual aspect concept', '(c) Business entity concept', 'Answer is c'),
(7, 1, 99, 'State the case where the going concern concept is applied?', 'When an enterprise was set up for a particular purpose, which has been achieved or to be achieved shortly', 'When a liquidator has been appointed in case of a company which is to be liquidated', 'Fixed assets are acquired for use in the business for earning revenues and are not meant for resale.', 'When an enterprise is declared sick', '(a)	When an enterprise was set up for a particular purpose, which has been achieved or to be achieved shortly', 'Answer is a'),
(1, 1, 100, 'Depreciation of fixed assets is an example of________', 'Revenue', 'Deferred Revenue', 'Capital', 'None of the above', '(a) Revenue', 'Answer is a'),
(7, 1, 101, 'An amount of Rs.200 received from A credited to B would affect ', 'Accounts of A & B both', 'A’s account only', 'Cash Account', 'B’s account only', '(a)	Accounts of A & B both', 'Answer is a'),
(7, 1, 102, 'In _____ method depreciation is charged by allocating depreciable cost in proposition of the annual output to the probable life time output.', 'Working hours method', 'Replacement method', 'Revaluation method', 'Production units method', '(d) Production units method', 'Answer is d'),
(7, 1, 103, 'A suspense account facilitates the preparation of ______ even when the  ____ has not tallied.', 'Ledgers; Trial Balance', 'Financial statements; Trial Balance', 'Trial Balance; Financial statements', 'Journal; Trial Balance', '(b)	Financial statements; Trial Balance', 'Answer is b'),
(7, 1, 104, 'RPG Ltd purchased machinery at a cost of Rs.55000. Its market value at the end of the year is Rs.60000. The company wants to disclose the machinery at Rs.60000. However the auditor emphasizes that the machinery should be valued at Rs.55000 according to -', 'Money measurement principle', 'Historical cost concept', 'Full disclosure principle', 'Conservatism concept', '(b)	Historical cost concept	', 'Answer is b'),
(7, 1, 105, 'Trade Receivables Rs.55200. Bad Debts Rs.200. Provision for doubtful debts @ 5%. Provision for discount @ 2%. The amount of provision for doubtful debts will be', 'Rs.1045', 'Rs.2750', 'Rs.1100', 'Rs.2760', '(b) Rs.2750', 'Answer is b'),
(1, 1, 106, 'The balance of the machine after charging depreciation for the year 2009-10 is Rs. 72900. The machine was purchased on 01-04-2007.  Depreciation @ 10% under WDV method. Cost price of the machine was – ', 'Rs.100000	', 'Rs.90000', 'Rs.81000', 'Rs.72900', '(a)	Rs.100000	', 'Answer is a'),
(7, 1, 107, 'A transport company purchases a truck for Rs.200000 on 1st January 2009. Depreciation @ 20% (WDV). The truck was sold on 1st July 2010 for a sum of Rs.16000. Profit/loss – ', 'Loss of Rs.16000', 'Profit of Rs.16000', 'Profit of Rs.20000', 'Profit of Rs.12000', '(b)	Profit of Rs.16000', 'Answer is b'),
(7, 1, 108, 'Ram started business with cash 			Rs.50000 Purchased goods from Harish on credit		Rs.20000 Sold goods to shyam (costing Rs.3000)		Rs.3600 The accounting equation on the basis of the above transaction will be', 'Assets Rs.70600 = Liabilities Rs.3600 + Owner’s equity Rs.67000', 'Assets Rs.70600 = Liabilities Rs.50600 + Owner’s equity Rs.20000', 'Assets Rs.70600 = Liabilities Rs.20000 + Owner’s equity Rs.50600', 'None of Above', '(c)	Assets Rs.70600 = Liabilities Rs.20000 + Owner’s equity Rs.50600', 'Answer is c'),
(7, 1, 109, 'Value of physical inventory on 15.04.2010 was Rs.300000. Sales amounting to Rs.100000 and purchases worth Rs.50000 were held between 31.3.2010 and 15.4.2010. Goods are sold at a profit of 20% on sales. Value of inventory as on 3103.2010 is', 'Rs.350000', 'Rs.270000', 'Rs.330000', 'Rs.300000', '(c) Rs.330000', 'Answer is C'),
(7, 1, 110, 'Record of purchase of TV parts  Date			Quantity		Price Per Unit March 4			900			Rs.5 March 10			400			Rs.5.50 Record of Issues March 5			600			 March 12			400	 The value of TV sets on 15th March as per LIFO will be', 'Rs.1500', 'Rs.1650', 'Rs.1575', 'None of these', '(a)	Rs.1500', 'Answer is a'),
(7, 1, 111, 'Good costing Rs.10000 were sold at 1/6th Profit on selling price. The sales would be', 'Rs.12000', 'Rs.12500', 'Rs.10000', 'None of these', '(a)	Rs.12000', 'Answer is a'),
(7, 1, 112, 'Drawing account is in the nature of', 'Personal Account', 'Real account', 'Nominal account', 'None of these', '(a)	Personal Account', 'Answer is a'),
(7, 1, 113, 'Narrations are given at the end of', 'Final accounts', 'Trial balance', 'Each ledger account', 'Each journal entry', '(d) Each journal entry', 'Answer is d'),
(7, 1, 114, 'The basic consideration(s) in distinction between capital and revenue expenditure is /are', 'Nature of business', 'Effect on revenue generating capacity of business', 'Purpose of expense', 'All of these', '(d) All of these', 'Answer is d'),
(7, 1, 115, 'Unintentional omission or commission of amounts and accounts in the process of recording transactions are known as', 'Frauds', 'Misinterpretation	', 'Errors', 'None of the above', '(c) Errors', 'Answer is c'),
(7, 1, 116, '”Treating a revenue expenditure as a capital expenditure” is an example of', 'Compensating error', 'Error of principle	', 'Error of omission', 'Error of commission', '(b) Error of principle', 'Answer is b'),
(7, 1, 117, 'When opening inventory is overstated, net income for the accounting period will be', 'Overstated	', 'Not affected', 'Understated ', 'None of these', '(c) Understated ', 'Answer is c'),
(7, 1, 118, 'Machine purchased (01.04.2010) – Rs.10000 Balance as on 01.04.2012 – Rs.6000; Depreciation – SLM basis Method of depreciation changed from SLM to WDV – Rate of WDV depreciation – 20% The amount of short/excess depreciation of last two years will be', 'Excess depreciation of Rs.400', 'Short depreciation of Rs.400', 'Excess depreciation of Rs.1600', 'Short depreciation of Rs.1600', '(a) Excess depreciation of Rs.400', 'Answer is a'),
(7, 1, 119, 'A bad debt recovered during the current year is a ', 'Capital expenditure', 'Revenue expenditure', 'Capital Receipt', 'Revenue Receipt', '(d) Revenue Receipt', 'Answer is d'),
(7, 1, 120, 'The information provided in the annual financial statements of an enterprise pertains to:', 'Business industry', 'Economy', 'Individual business entity', 'None of these', '(c) Individual business entity', 'Answer is c'),
(7, 1, 121, 'Payment of personal expenses of the owner of the business are to be recorded as', 'Drawing', 'Expenses', 'Liabilities', 'None of these', '(a) Drawing', 'Answer is a'),
(7, 1, 122, 'Which of the following items is an asset?', 'Salary paid to manager', 'Accounts payable', 'Sales', 'Trade receivables', '(d) Trade receivables', 'Answer is d'),
(7, 1, 123, 'Carriage charges paid for a new plant purchased if debited to carriage account would affect', 'Plant account', 'Carriage account', 'Plant & carriage account', 'None of these', '(c) Plant & carriage account', 'Answer is c'),
(7, 1, 124, 'The following are the details regarding purchases during the month of January  January 1		Purchases		200 units	@ Rs.7 January 1		Purchases		900 units	@ Rs.8	 January 1		Purchases		300 units	@ Rs.9	 January 1		Purchases		400 units	@ Rs.10 A physical inventory on January 31 reveals that there are 700 units. Value of closing inventory as per FIFO method is – ', 'Rs.5400', 'Rs.6700', 'Rs.8600', 'Rs.5000', '(b) Rs.6700', 'Answer is b'),
(7, 1, 125, 'Shyam prepared a trial balance for his factory on 31st March, 2010. The debit side of the trail balance was short by Rs.500. He transferred the deficiency to suspense a/c. In April, 2010 after a close examination, he found that the purchase day book for September 2009 was undercast by Rs.500. The rectifying entry assuming the final accounts are not prepared', 'Purchase Dr; To Cash – Rs.500', 'Suspense Dr; To Purchase – Rs.500', 'Purchase Dr; To Suspense – Rs.500', 'None of these', '(c) Purchase Dr; To Suspense – Rs.500', 'Answer is c'),
(7, 1, 126, 'Which of the following will affect trial balance', 'Repairs to building wrongly debited to Building A/c', 'Total of purchase journal cast short by Rs.1000', 'Freight paid on new machinery purchased debited to Freight A/c', 'None of these', '(b)	Total of purchase journal cast short by Rs.1000', 'Answer is b'),
(7, 1, 127, 'Which of the following expenses is not included in the acquisition cost of a plant and equipment?', 'Cost of site preparation', 'Delivery and handling charges', 'Installation costs', 'Financing cost incurred subsequent to the period after plant & equipment is put to use.', '(d)	Financing cost incurred subsequent to the period after plant & equipment is put to use.', 'Answer is d'),
(7, 1, 128, 'The portion of the acquisition cost of the asset, yet to be allocated is known as', 'Written Down Value', 'Accumulated Value', 'Realizable Value', 'Salvage Value', '(a) Written Down Value', 'Answer is a'),
(7, 1, 129, 'In case of debt becoming bad, the amount should be credited to ', 'Debtors A/c', 'Bad debts A/c', 'Cash A/c', 'Sales A/c', '(a) Debtors A/c', 'Answer is a'),
(7, 1, 130, '51.	Consider the following data pertaining to H Ltd. for the month of March 2015: Particulars	As on March 01, 2015 (Rs)	As on March 31, 2015 (Rs) Inventory	1,80,000	90,000  The company made purchases amounting Rs.330000 on credit. During the month of March 2011, the company paid a sum of Rs.350000 to the suppliers. The goods are sold at 25% above the cost. The sales for the month of March 2015 were', 'Rs.412500', 'Rs.525000', 'Rs.90000', 'Rs.315000', '(b) Rs.525000', 'Answer is b'),
(7, 1, 131, 'While finalizing the current year’s profit, the company realized that there was an error in the valuation of closing Inventory of the previous year. In the previous year, closing Inventory was valued more by Rs.50000. As a result ', 'Previous year’s profit is overstated and current year’s profit is also overstated ', 'Previous year’s profit is understated and current year’s profit is overstated ', 'Previous year’s profit is understated and current year’s profit is also understated ', 'Previous year’s profit is overstated and current year’s profit is understated', '(d) Previous year’s profit is overstated and current year’s profit is understated', 'Answer is d'),
(7, 1, 132, 'The amount of purchase if Cost of goods sold is Rs.40350. Opening inventory is Rs.2900 and closing inventory is Rs.3000', 'Rs.40250', 'Rs.37450', 'Rs.37350', 'Rs.40,450', '(d) Rs.40,450', 'Answer is d'),
(7, 1, 133, 'Goods purchased Rs.300000. Sales Rs.270000. Margin 20% on cost. What will be the Closing Inventory?', 'Rs.60000', 'Rs.30000', 'Rs.75000', 'Rs.84000', '(c) Rs.75000', 'Answer is c'),
(7, 1, 134, 'The total cost of goods available for sale with a company during the current year is Rs.4800000 and the total sales during the period are Rs.5200000. If the gross profit margin of the company is 25 % on sales, the closing inventory during the current year is', 'Rs.16 lakh', 'Rs.12 lakh', 'Rs.9 lakh', 'Rs.10.4 lakh', '(c) Rs.9 lakh', 'Answer is c'),
(7, 1, 135, 'Financial statements do not consider', 'Assets expressed in monetary terms', 'Liabilities expressed in monetary terms', 'Only assets expressed in non-monetary terms.', 'Assets and liabilities expressed in non-monetary terms', '(d)	Assets and liabilities expressed in non-monetary terms', 'Answer is d'),
(7, 1, 136, 'A purchased a car for Rs.500000 making a down payment of Rs.100000 and signing a       Rs. 400000 bill payable due in 60 days. As a result of this transaction ', 'Total assets increased by Rs.500000', 'Total liabilities increased by Rs.400000. ', 'Total assets increased by Rs.400000. ', 'Total assets increased by Rs.400000 with corresponding increase in liabilities by Rs.400000.', '(d)	Total assets increased by Rs.400000 with corresponding increase in liabilities by Rs.400000.', 'Answer is d'),
(7, 1, 137, 'Revenue from sale of products is generally recognized in the period in which', 'Cash is collected	', 'Sale is made', 'Products are manufactured', 'None of the above', '(b)	Sale is made', 'Answer is b'),
(7, 1, 138, 'If an individual asset is increased, there will be a corresponding', 'Increase of another asset or increase of capital. ', 'Decrease of another asset or increase of liability. ', 'Decrease of specific liability or decrease of capital. ', 'Increase of drawings and liability.', '(b)	Decrease of another asset or increase of liability. ', 'Answer is b'),
(7, 2, 139, 'A minor’s liabilities for necessaries supplied to him', 'Arises after he attains age of majority', 'Is only against minor’s property', 'Does not arise at all', 'Arises if minor gives a promise for it', '(b) Is only against minor’s property', 'Answer is b'),
(7, 2, 140, 'An agreement is void if it is opposed to public policy. Which of the following is not covered by the heads of public policy?', 'Trading with an enemy', 'Trafficking in public offices', 'Marriage brokerage contracts', 'Contracts to do impossible acts', '(d) Contracts to do impossible acts', 'Answer is d'),
(7, 2, 141, 'The most important element in partnership is', 'Business', 'Sharing of Profits', 'Agreement', 'Mutual Agency', '(d) Mutual Agency', 'Answer is d'),
(4, 1, 142, 'Management accounting is an extension of', 'financial accounting', 'cost accounting ', 'product costing', 'financial management', '(d) financial management', 'Answer is d'),
(4, 1, 143, 'The true and fair view of the overall results of the entity''s transactions is presented in', 'cost accounting', 'management accounting ', 'financial accounting', 'financial management', '(d) financial management', 'Answer is d'),
(4, 1, 144, 'The adoption and analysis of accounting information and its diagnosis and explanation 	in such a way as to assist management is done with:', 'management accounting	', 'management information system', 'cost accounting', 'financial accounting', '(c) cost accounting', 'Answer is c'),
(4, 1, 145, 'The decision making needs of the management is met through', 'cost accounting', 'forensic accounting ', 'futuristic management', 'management accounting', '(d) management accounting', 'Answer is d'),
(4, 1, 146, '__________ accounting records and analyzes business events long after they have taken place', 'Cost ', 'Financial', 'Management', 'Managerial', '(a)Cost', 'Answer is c'),
(4, 1, 147, 'Pin pointing the significant deviations between actual and expected activities 	suggesting appropriate corrective measures in deserving cases is called.', 'management by exception', 'exception accounting  ', 'forensic management', 'management by objectives', '(c) forensic management', 'Answer is c'),
(4, 1, 148, '___________ Accounting makes corporate planning and strategy effective and meaningful.', 'financial', 'cost', 'management ', 'Responsibility', 'cost', 'Answer is B'),
(4, 1, 149, 'The__________ Accounting needs to be dynamic and forward looking.', 'Cost', 'management', 'financial', 'product', 'Management', 'Answer is b'),
(4, 1, 150, '__________accounting helps the organization prepare long-term plans, formulate 	corporate strategy and forecast and evaluate competitors.  ', 'cost', 'financial', 'Management', 'strategic management', 'cost', 'Answer is a'),
(4, 1, 151, '_________accounting serves not only as a tool in the hands of management, but also 	provides for a technique evaluating the performance of the management itself.', 'cost', 'financial', 'divisional', 'management', 'cost', 'Answer is a'),
(4, 1, 152, 'A Bill of Exchange can be discounted with the _______ .', 'Bank', 'Payee', 'drawee', 'seller', '(a)bank', 'Answer is a'),
(4, 1, 153, 'Discount on Bill discounted is an ______ to Bank and an ______ to the Drawer', 'income, expense', 'expense, income', 'gain, loss', 'loss,gain', '(d)loss,gain', 'Answer is d'),
(4, 1, 154, '_______  is a person on whom a bill is drawn', 'drawee', 'payee', 'drawer', 'bank', '(a)drawee', 'Answer is a'),
(4, 1, 155, '_______  is a person who is entitled to receive the amount of the Bill.', 'Payee', 'debtor', 'drawer', 'Creditor', '(c)drawer', 'Answer is c'),
(4, 1, 156, 'A Bill of Exchange contains an order for payment of a certain sum of _______		only.', 'Money', 'kind', 'asset', 'goods', '(a) Money', 'A'),
(4, 1, 157, 'In  _______  acceptance, the drawee puts his signature across the thee of the Bill with or without the word "Accepted". ', 'General', 'Conditional', 'Unconditional', 'Restrictive', '(c)Unconditional', 'Answer is c'),
(4, 1, 158, 'In  _______  acceptance, drawee does not agree with some of the conditions as specified in the Bill.', 'Qualified', 'Unqualified', 'Conditional', 'Unconditional', '(a) Qualified', 'Answer is a'),
(4, 1, 159, 'Hundies are drawn in  _______ languages', 'English', 'Indian', 'Foreign', 'German', '(c)Foreign', 'Answer is c'),
(4, 1, 160, '_______  is a person in whose favour a Bill is endorsed.', 'Endorser', 'Endorsee', 'Payee', 'Buyer', '(a)Endorsee', 'Answer is a'),
(4, 1, 161, '_______  days are allowed as grace days.', '3', '4', '5', '6', '(b)4', 'Answer is b'),
(4, 1, 162, '_______  is a Govt. Officer.', 'Notary Public', 'CEO', 'Accountant', 'Sales Manager', '(a) Notary Public', 'Answer is a'),
(4, 1, 163, 'Due Date is arrived at by adding  _______  days to the date on which the period of a Bill  _______ ', '3', '2', '4', '5', '(a)3', 'Answer is a'),
(4, 1, 164, 'If the Due Date falls on Public Holiday, the payment must be made on _______ ', 'preceeding day', 'succeding day', 'voluntary holiday', 'emergency  holiday', '(a)preceeding day', 'Answer is a'),
(4, 1, 165, 'A Bill due on 26th January must be paid on  _______  January.', '25th', '24th', '27th', '28th', '(c)27th', 'Answer is c'),
(4, 1, 166, 'A Bill drawn on 1st January, 2008 for 3 months falls due on	', '4th April', '5th April', '1st April', '7th April', '(d)7th April', 'Answer is d'),
(4, 1, 167, 'Payment of Bill before due date is called as  _______ ', 'retirement', 'honour', 'prehonour', 'dishonour', '(c)prehonour', 'Answer is c'),
(4, 1, 168, 'Noting charges are neither _______  nor  _______ to the drawer.', 'income, expense', 'profit, loss', 'receipt,payment', 'capital, revenue', '(d) capital, revenue', 'Answer is d'),
(4, 1, 169, 'A Bill of exchange, which arises out of trading relationship of the parties, is known as a  ', 'trade bill', 'accommodation bill', 'mutual bill', 'cash bill', '(d)cash bill', 'Answer is d');

-- --------------------------------------------------------

--
-- Table structure for table `q_paper`
--

CREATE TABLE IF NOT EXISTS `q_paper` (
  `qpaper_no` int(3) NOT NULL AUTO_INCREMENT,
  `course_id` int(3) NOT NULL,
  `chapter_id` int(3) NOT NULL,
  `chapter_test` varchar(50) NOT NULL,
  `chapter_note` varchar(50) NOT NULL,
  PRIMARY KEY (`qpaper_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `q_paper`
--

INSERT INTO `q_paper` (`qpaper_no`, `course_id`, `chapter_id`, `chapter_test`, `chapter_note`) VALUES
(1, 1, 1, '54558-completion_certi.docx', 'ertghj'),
(2, 8, 5, '21819-10.jpg', 'fd'),
(3, 1, 1, '72882-bhavin.txt', 'fd'),
(4, 1, 1, '82779-bhavin.txt', 'vbn'),
(5, 7, 1, '4489-123456.txt', 'fgbhrdytfg'),
(6, 1, 1, '96901-changes.txt', 'Temp'),
(7, 8, 5, '89305-recover_db.txt', 'micro eco');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `course_id` int(3) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `name` varchar(15) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `marks` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`course_id`, `photo`, `name`, `subject`, `marks`) VALUES
(7, '83048-dc.jpg', 'abc', 'law', '50'),
(1, '39953-avatar.png', 'Kashish', 'Accounts', '50'),
(1, '93674-avatar.png', 'Anil', 'Accounts', '68'),
(2, '38617-avatar.png', 'Rahul', 'Accounts', '88'),
(2, '13085-avatar.png', 'Sachin', 'Accounts', '78');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `report_id` int(3) NOT NULL AUTO_INCREMENT,
  `course_id` int(3) NOT NULL,
  `test` varchar(50) NOT NULL,
  `report` varchar(50) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `course_id`, `test`, `report`) VALUES
(1, 8, 'test 1', '32043-testcase.xlsx'),
(2, 1, 'test 1', '82867-software-testing-test-2.xlsx'),
(3, 8, 'test 2', '35101-assigementofst(mehul).xlsx'),
(4, 7, 'test 11', '68286-54558-completion_certi-(3).docx'),
(5, 1, 'fgbh', '52654-test.html');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `exam_id` int(3) NOT NULL,
  `stu_id` int(3) NOT NULL,
  `result` int(3) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`exam_id`, `stu_id`, `result`) VALUES
(13, 2, 0),
(14, 2, 1),
(15, 2, 1),
(16, 1, 0),
(17, 2, 1),
(18, 1, 0),
(19, 1, 0),
(20, 1, 0),
(21, 1, 0),
(22, 1, 0),
(23, 1, 0),
(24, 1, 0),
(25, 2, 2),
(26, 2, 2),
(27, 1, 0),
(28, 1, 0),
(29, 2, 2),
(30, 2, 2),
(31, 2, 2),
(32, 1, 0),
(33, 1, 0),
(34, 2, 41),
(35, 2, 0),
(36, 2, 5),
(37, 0, 0),
(38, 1, 0),
(39, 1, 0),
(40, 2, 0),
(41, 1, 0),
(42, 2, 46),
(43, 2, 0),
(44, 2, 0),
(45, 2, 0),
(46, 2, 0),
(47, 2, 0),
(48, 2, 0),
(49, 2, 0),
(50, 2, 0),
(51, 2, 0),
(52, 2, 0),
(53, 2, 0),
(54, 3, 10),
(55, 1, 0),
(56, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `course_id` int(3) NOT NULL,
  `event_id` int(5) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(150) NOT NULL,
  `event_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`course_id`, `event_id`, `event_name`, `event_date`, `event_detail`) VALUES
(1, 1, 'holiday', '2016-04-06 03:56:21', 'no teacher available'),
(7, 5, 'AS updated soon', '2016-04-26 04:33:21', 'as 23 updated on 14th march'),
(1, 7, 'event new', '2016-04-25 14:50:50', 'mhngbfvdcsxz'),
(4, 8, 'Vacation', '2016-05-01 13:32:44', 'Class to be started soon');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE IF NOT EXISTS `student_registration` (
  `stu_id` int(5) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(30) NOT NULL,
  `stu_phone` varchar(13) NOT NULL,
  `stu_email` varchar(30) NOT NULL,
  `stu_address` varchar(100) NOT NULL,
  `course_id` int(3) NOT NULL,
  PRIMARY KEY (`stu_id`),
  UNIQUE KEY `stu_email_2` (`stu_email`),
  KEY `stu_email` (`stu_email`),
  KEY `stu_email_3` (`stu_email`),
  KEY `stu_email_4` (`stu_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`stu_id`, `stu_name`, `stu_phone`, `stu_email`, `stu_address`, `course_id`) VALUES
(1, 'devangjadhav', '8866173680', 'sachinmore172@gmail.com', '2nd floor, Ishwar Cottage,\r\nHathi Pole, Rajmahal Road,', 4),
(2, '', '0', 'pkrutika1995@gmail.com', '', 7),
(3, '', '0', 'kushal17995@gmail.com', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `course_id` int(3) NOT NULL,
  `subject_id` int(3) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`course_id`, `subject_id`, `subject`) VALUES
(7, 1, 'Fundamentals of Accounting'),
(7, 2, 'Mercantile Laws'),
(7, 3, 'General Economics'),
(7, 4, 'Quantitative Aptitude'),
(8, 5, 'Accounting'),
(8, 6, 'Business Laws, Ethics and Communication'),
(8, 7, 'Cost Accounting and Financial Management'),
(8, 8, 'Taxation'),
(8, 9, 'Advanced Accounting'),
(8, 10, 'Auditing and Assurance'),
(8, 11, 'Information Technology and Strategic Management');

-- --------------------------------------------------------

--
-- Table structure for table `subject_detail`
--

CREATE TABLE IF NOT EXISTS `subject_detail` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(3) NOT NULL,
  `subject` varchar(50) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `st_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subject_detail`
--

INSERT INTO `subject_detail` (`s_id`, `course_id`, `subject`) VALUES
(1, 4, 'Marketing Management'),
(2, 4, 'Elements of Indirect Taxes'),
(3, 4, 'Management Accounting'),
(4, 4, 'Corporate Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `unit_detail`
--

CREATE TABLE IF NOT EXISTS `unit_detail` (
  `u_id` int(3) NOT NULL AUTO_INCREMENT,
  `s_id` int(3) NOT NULL,
  `unit` varchar(50) NOT NULL,
  PRIMARY KEY (`u_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `unit_detail`
--

INSERT INTO `unit_detail` (`u_id`, `s_id`, `unit`) VALUES
(1, 1, 'Unit 1'),
(2, 1, 'Unit 2'),
(3, 1, 'Unit 3'),
(4, 1, 'Unit 4'),
(5, 2, 'Unit 1'),
(6, 2, 'Unit 2'),
(7, 2, 'Unit 3'),
(8, 2, 'Unit 4'),
(9, 3, 'Unit 1'),
(10, 3, 'Unit 2'),
(11, 3, 'Unit 3'),
(12, 3, 'Unit 4'),
(13, 4, 'Unit 1'),
(14, 4, 'Unit 2'),
(15, 4, 'Unit 3'),
(16, 4, 'Unit 4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
