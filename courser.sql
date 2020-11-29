-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 11:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courser`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_name` text NOT NULL,
  `class_desc` text NOT NULL,
  `class_cred` text NOT NULL,
  `class_fee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `course_id`, `class_name`, `class_desc`, `class_cred`, `class_fee`) VALUES
(1, 1, 'Java Programming: Solving Problems with Software', 'Learn to code in Java and improve your programming and problem-solving skills. You will learn to design algorithms as well as develop and debug programs. Using custom open-source classes, you will write programs that access and transform images, websites, and other types of data. At the end of the course you will build a program that determines the popularity of different baby names in the US over time by analyzing comma separated value (CSV) files.', '4', '$2500'),
(2, 1, 'Java Programming: Arrays, Lists, and Structured Data\r\n', 'Build on the software engineering skills you learned in \"Java Programming: Solving Problems with Software\" by learning new data structures. Use these data structures to build more complex programs that use Java\'s object-oriented features. At the end of the course you will write an encryption program and a program to break your encryption algorithm.', '4', '$2500'),
(3, 1, 'Object Oriented Programming in Java\r\n', ' Our goal is that by the end of this course each and every one of you feels empowered to create a Java program that\'s more advanced than any you have created in the past and that is personally interesting to you. In achieving this goal you will also learn the fundamentals of Object Oriented Programming, how to leverage the power of existing libraries, how to build graphical user interfaces, and how to use some core algorithms for searching and sorting data. And this course is project-based, so we\'ll dive right into the project immediately!', '4', '$2500'),
(4, 1, 'Data Structures and Performance', 'In this course, you will use and analyze data structures that are used in industry-level applications, such as linked lists, trees, and hashtables. You will explain how these data structures make programs more efficient and flexible. You will apply asymptotic Big-O analysis to describe the performance of algorithms and evaluate which strategy to use for efficient data retrieval, addition of new data, deletion of elements, and/or memory usage.', '4', '$2500'),
(5, 2, 'Fundamentals of GIS', 'Explore the world of spatial analysis and cartography with geographic information systems (GIS). In this class you will learn the basics of the industry\'s leading software tool, ArcGIS, during four week-long modules:', '3', '$6250\r\n'),
(6, 2, 'Geospatial and Environmental Analysis\r\n', 'Apply your GIS knowledge in this course on geospatial analysis, focusing on analysis tools, 3D data, working with rasters, projections, and environment variables. Through all four weeks of this course, we\'ll work through a project together - something unique to this course - from project conception, through data retrieval, initial data management and processing, and finally to our analysis products.', '3', '$6250'),
(7, 2, 'GIS Data Formats, Design and Quality', 'In this course, the second in the Geographic Information Systems (GIS) Specialization, you will go in-depth with common data types (such as raster and vector data), structures, quality and storage during four week-long modules:', '3', '$6250'),
(8, 2, 'Imagery, Automation, and Applications', 'Using the knowledge you\'ve learned about ArcGIS, complete technical tasks such raster calculations and suitability analysis. In this class you will become comfortable with spatial analysis and applications within GIS during four week-long modules', '3', '$6250'),
(9, 3, 'Digital Marketing', 'This Specialization explores several aspects of the digital marketing environment, including topics such as digital marketing analytics, search engine optimization, social media marketing, and 3D Printing. The Digital Marketing Specialization gives you a richer understanding of the new digital marketing landscape and the skills and tools used to digitally create, distribute, promote, and price products or services.', '8', '$13000'),
(10, 3, 'Strategic Leadership & Management\r\n', 'Gain leadership and business skills that make an immediate impact. Practice everyday leadership and learn to manage people effectively. Learn to implement management strategies in the real world. Make businesses more efficient by applying principles of organizational design.', '8', '$13000'),
(11, 3, 'Managerial Economics & Business Analysis\r\n', 'In order to effectively manage and operate a business, managers and leaders need to understand the market characteristics and economic environment. In this Specialization, build a solid understanding of market operation and the macro-economic environment by studying real-world examples. Identify economic factors that impact business decisions and develop an analytical framework using statistical tools.', '8', '$13000'),
(12, 4, 'Fundamentals of Graphic Design', 'Graphic Design is all around us! Words and pictures - the building blocks of graphic design - are the elements that carry the majority of the content in both the digital world and the printed world. As graphic design becomes more visible and prevalent in our lives, graphic design as a practice becomes more important in our culture.\r\n\r\n', '4', '$2500'),
(13, 4, 'Introduction to Typography', 'Typography is the art of manipulating the visual form of language to enrich and control its meaning. It\'s an essential area of skill and knowledge for graphic designers. Typography predates modern graphic design by around 500 years; it is rich in rules, conventions, and esoteric terminology - but it remains an exciting space for invention and expression.', '4', '$2500'),
(14, 4, 'Introduction to Imagemaking', 'This course for serious makers, and for students new to imagemaking. Imagemaking is a fluid and exciting area of graphic design that comes out of practice and process: experimenting fearlessly, showing and sharing ideas, and giving and receiving knowledgeable and constructive input.', '5', '$3000'),
(15, 5, 'Week 1\r\n', 'We will learn about the components inside the atom and look especially at the electrons. The electron structure determines the properties of the elements. So, by the end of this series of lessons, you will know for each elements where the electrons are located in the atom.\r\n\r\n', '3', 'Free'),
(16, 5, 'Week 2', 'Once we understand the electronic structure, we will be able determine how the periodic table can be used to compare the elements according to atomic size and various energies. We will conclude by seeing how these trends can be used to predict chemical properties of the elements.\r\n\r\n', '3', 'Free'),
(17, 5, 'Week 3', 'Now that we know the structure of an atom, we can explore how atoms combine to form either molecular or ionic compounds. Then we will learn the rules of nomenclature that ensure that a compound is named according to IUPAC rules. We will end this unit by looking at quantitative relationships for compounds including the molar mass of and mass percent of an element in a compound.\r\n\r\n', '3', 'Free'),
(18, 6, 'Fundamentals of Quantitative Modeling', 'How can you put data to work for you? Specifically, how can numbers in a spreadsheet tell us about present and past business activities, and how can we use them to forecast the future? The answer is in building quantitative models, and this course is designed to help you understand the fundamentals of this critical, foundational, business skill. Through a series of short lectures, demonstrations, and assignments, you\'ll learn the key ideas and process of quantitative modeling so that you can begin to create your own models for your own business or enterprise. By the end of this course, you will have seen a variety of practical commonly used quantitative models as well as the building blocks that will allow you to start structuring your own models. These building blocks will be put to use in the other courses in this Specialization.\r\n\r\n', '4', '$3000'),
(19, 6, 'Introduction to Spreadsheets and Models', 'The simple spreadsheet is one of the most powerful data analysis tools that exists, and it\'s available to almost anyone. Major corporations and small businesses alike use spreadsheet models to determine where key measures of their success are now, and where they are likely to be in the future. But in order to get the most out of a spreadsheet, you have the know-how to use it. This course is designed to give you an introduction to basic spreadsheet tools and formulas so that you can begin harness the power of spreadsheets to map the data you have now and to predict the data you may have in the future. Through short, easy-to-follow demonstrations, you\'ll learn how to use Excel or Sheets so that you can begin to build models and decision trees in future courses in this Specialization.', '4', '$3000'),
(20, 6, 'Modeling Risk and Realities', 'Useful quantitative models help you to make informed decisions both in situations in which the factors affecting your decision are clear, as well as in situations in which some important factors are not clear at all. In this course, you can learn how to create quantitative models to reflect complex realities, and how to include in your model elements of risk and uncertainty. You\'ll also learn the methods for creating predictive models for identifying optimal choices; and how those choices change in response to changes in the model\'s assumptions. You\'ll also learn the basics of the measurement and management of risk. By the end of this course, you\'ll be able to build your own models with your own data, so that you can begin making data-informed decisions. You\'ll also be prepared for the next course in the Specialization.', '4', '$3000'),
(21, 6, 'Decision-Making and Scenarios', 'This course is designed to show you how use quantitative models to transform data into better business decisions. You\'ll learn both how to use models to facilitate decision-making and also how to structure decision-making for optimum results. Two of Wharton\'s most acclaimed professors will show you the step-by-step processes of modeling common business and financial scenarios, so you can significantly improve your ability to structure complex problems and derive useful insights about alternatives. Once you\'ve created models of existing realities, possible risks, and alternative scenarios, you can determine the best solution for your business or enterprise, using the decision-making tools and techniques you\'ve learned in this course.\r\n\r\n', '4', '$3000'),
(22, 7, 'Architecture, Compilers, and Parallel Computing', 'Learn parallel programming and how to achieve peak performance from multi-core CPU and many-core GPU architectures. Master languages, compilers, and libraries that are suited for various parallel applications and platforms.\r\n\r\n', '5', '$7500'),
(23, 7, 'Artificial Intelligence and Machine Learning\r\n', 'Build your knowledge of the fundamental statistical models and numerical optimizations of machine learning, including deep learning, with applications in computer vision, natural language processing and intelligent user interaction.\r\n\r\n', '5', '$7500'),
(24, 7, 'Database and Information Systems\r\n', 'Learn the basics of database systems as well as data mining methods for extracting insight from structured datasets (e.g. for a sales recommendation system) as well as unstructured data (e.g. from natural language text).\r\n\r\n', '5', '$7500'),
(25, 7, 'Graphics, Visualization, and Interactive Computing\r\n', 'Learn the fundamentals of interactive computing that promote synergy between the computer and its user. The Data Visualization course, for example, shows how to present and manipulate data to communicate understanding and insight to the public.\r\n\r\n', '5', '$7500');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_type` varchar(200) NOT NULL,
  `course_cost` varchar(300) NOT NULL,
  `course_length` varchar(200) NOT NULL,
  `course_desc` varchar(10000) NOT NULL,
  `course_info` varchar(10000) NOT NULL,
  `course_img` varchar(100) NOT NULL,
  `course_classes` varchar(200) NOT NULL,
  `course_prov` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_type`, `course_cost`, `course_length`, `course_desc`, `course_info`, `course_img`, `course_classes`, `course_prov`) VALUES
(1, 'Object Oriented Programming in Java', 'Computer Science', '$10000', '12 - 36 months', 'This Specialization is for aspiring software developers with some programming experience in at least one other programming language (e.g., Python, C, JavaScript, etc.) who want to be able to solve more complex problems through objected-oriented design with Java. In addition to learning Java, you will gain experience with two Java development environments (BlueJ and Eclipse), learn how to program with graphical user interfaces, and learn how to design programs capable of managing large amounts of data. These software engineering skills are broadly applicable across wide array of industries.', 'In this Specialization, you will demonstrate your new proficiency in Java and object-oriented programming design through the development of four Java applications: an analysis of CSV data files, an encryption program, an interactive map for displaying geospatial data, and a program that will allow users to manage, manipulate, and reason about large sets of textual data.', 'assets\\image\\courses\\java.jpg', '4', '\r\nMIT - Massachusetts Institute of Technology'),
(2, 'Geographic Information Systems (GIS) ', 'Engineering', '$25000', '24 - 48 months', 'Knowledge of Geographic Information Systems (GIS) is an increasingly sought after skill in industries from agriculture to public health. This Specialization, offered in partnership with ArcGIS developer Esri, will teach the skills you need to successfully use GIS software in a professional setting. You will learn how to analyze your spatial data, use cartography techniques to communicate your results in maps, and collaborate with peers in GIS and GIS-dependent fields. In the final Capstone Project, you will create a professional-quality GIS portfolio piece using a combination of data identification and collection, analytical map development, and spatial analysis techniques.', 'Learners will work through the various course projects to gain experience and skills related to geographic information systems. Each course reviews the concepts in a final project to reinforce your learning. Each course builds on the knowledge of the previous and the Specialization culminates with a capstone where you will design and execute a complete GIS-based analysis - from identifying a concept, question or issue you wish to develop, all the way to final data products and maps that you can add to your portfolio.', 'assets\\image\\courses\\gis.jpg', '4', 'UC Davis\r\n'),
(3, 'Master of Business Administration', 'Business', '$40000', '24 - 48 months', 'Students in the iMBA program earn the same high-quality MBA degree that on-campus students have been earning for decades--but without needing to put career or family life on hold. Students achieve business mastery, gain lifelong leadership skills, and build a global network as they work alongside fellow students and faculty.', 'The iMBA is career-focused. Students develop leadership and management skills that help them thrive in today\'s business environment. Challenging team-based projects, face-to-face class sessions with faculty and peers, and a selection of 8 different Specializations make this MBA curriculum unmatched in flexibility and impact.', 'assets\\image\\courses\\mba.jpg', '3', 'University of Illinois\r\n\r\n'),
(4, 'Graphic Design', 'Media', '$8000', '12 - 24 months', 'Graphic design is all around us, in a myriad of forms, both on screen and in print, yet it is always made up of images and words to create a communication goal. This four-course sequence exposes students to the fundamental skills required to make sophisticated graphic design: process, historical context, and communication through image-making and typography. The sequence is completed by a capstone project that applies the skills of each course and peer feedback in a finished branding project suitable for a professional portfolio.', 'The goal of this specialization is to equip learners with a set of transferable formal and conceptual tools for \"making and communicating\" in the field of graphic design. This core skill set will equip learners for formal studies in graphic design, and a starting point for further work in interface design, motion graphics, and editorial design.', 'assets\\image\\courses\\graphic.jpg', '3', 'California Institute of the Arts\r\n'),
(5, 'Chemistry', 'Science\r\n', 'Free', '3 months', 'This course is designed to cover subjects in advanced high school chemistry courses, correlating to the standard topics as established by the American Chemical Society. This course is a precursor to the Advanced Chemistry Coursera course. Areas that are covered include atomic structure, periodic trends, compounds, reactions and stoichiometry, bonding, and thermochemistry.\r\n', 'This course is designed to cover subjects in advanced high school chemistry courses, correlating to the standard topics as established by the American Chemical Society. This course is a precursor to the Advanced Chemistry Coursera course. Areas that are covered include atomic structure, periodic trends, compounds, reactions and stoichiometry, bonding, and thermochemistry.\r\n', 'assets\\image\\courses\\chem.jpg', '3', 'University of Kentucky'),
(6, 'Business and Financial Modeling', 'Finance', '$12000', '24 - 36 months', 'Wharton\'s Business and Financial Modeling Specialization is designed to help you make informed business and financial decisions. These foundational courses will introduce you to spreadsheet models, modeling techniques, and common applications for investment analysis, company valuation, forecasting, and more. When you complete the Specialization, you\'ll be ready to use your own data to describe realities, build scenarios, and predict performance.\r\n\r\n', 'This course is designed to show you how use quantitative models to transform data into better business decisions. You\'ll learn both how to use models to facilitate decision-making and also how to structure decision-making for optimum results. Two of Wharton\'s most acclaimed professors will show you the step-by-step processes of modeling common business and financial scenarios, so you can significantly improve your ability to structure complex problems and derive useful insights about alternatives. Once you\'ve created models of existing realities, possible risks, and alternative scenarios, you can determine the best solution for your business or enterprise, using the decision-making tools and techniques you\'ve learned in this course.', 'assets\\image\\courses\\finance.jpg', '4', 'University of Pennsylvania'),
(7, 'Master of Computer Science', 'IT', '$30000', '24 - 36 months', 'Data science is transforming our global economy, redefining how we do business, and changing our lives for the better in countless ways. Data scientists are in high-demand across industries, valued for their ability to help businesses make date-driven decisions. If you\'re interested in extracting knowledge and insights from massive data sets and are eager to put these skills to work in a rewarding career, then enroll in the Master of Computer Science in Data Science (MCS-DS) program from the University of Illinois today, and start mastering the skills necessary for a successful data science career.', 'As a graduate of this program, you\'ll be able to apply mathematical foundations, algorithmic principles, and computer science theory to real-word problems, and you\'ll know how to analyze a problem and identify the computing requirements appropriate to its solution. You\'ll also possess the skills to design, implement, and evaluate a computer-based system, process, component, or program, and apply design and development principles to construct software systems of varying complexity.\r\n\r\n', 'assets\\image\\courses\\compsci.jpg', '4', 'University of Illinois');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `review_name` text NOT NULL,
  `review_title` text NOT NULL,
  `review_text` text NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `course_id`, `review_name`, `review_title`, `review_text`, `review_rating`, `review_email`) VALUES
(1, 1, 'Mark Khaw', 'Amazing ', 'Simply amazing, totally worth the time and money', 5, 'mark@gmail.com'),
(6, 2, 'fefefef', 'efefef', 'efef', 5, 'test@test.com'),
(7, 1, 'test', 'Decentwd aw wd', 'dadwadwadwdawdadawdaw wd wdwlkdjal djlw jwaldjawld jawlk awd ad ', 4, 'test@test.com'),
(8, 1, 'awswdawd', 'dqwdqdqwdqd', 'qdqwdqwdqwdqwdqwdqwdqwd qwd qwd qw qw d', 5, 'wdwdaw@awdawd.wckwkdw'),
(9, 3, 'okw ', 'Lousy', 'wdawdawdawdawdawdawdawd', 5, 'okw123@gmail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
