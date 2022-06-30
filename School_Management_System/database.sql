-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 01:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `mst_category`
--

CREATE TABLE `mst_category` (
  `category_code` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_category`
--

INSERT INTO `mst_category` (`category_code`, `description`) VALUES
(1, 'GENERAL'),
(2, 'SC'),
(3, 'ST'),
(4, 'OBC'),
(5, 'ORC'),
(6, 'OTHRES'),
(7, 'OBC-A'),
(8, 'OBC-B');

-- --------------------------------------------------------

--
-- Table structure for table `mst_class`
--

CREATE TABLE `mst_class` (
  `class_code` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_class`
--

INSERT INTO `mst_class` (`class_code`, `description`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III'),
(4, 'IV'),
(5, 'V'),
(6, 'VI'),
(7, 'VII'),
(8, 'VIII'),
(9, 'IX'),
(10, 'X'),
(11, 'XI'),
(12, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `mst_gender`
--

CREATE TABLE `mst_gender` (
  `gender_code` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_gender`
--

INSERT INTO `mst_gender` (`gender_code`, `description`) VALUES
(1, 'MALE'),
(2, 'FEMALE');

-- --------------------------------------------------------

--
-- Table structure for table `mst_religion`
--

CREATE TABLE `mst_religion` (
  `religion_code` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_religion`
--

INSERT INTO `mst_religion` (`religion_code`, `description`) VALUES
(1, 'HINDU'),
(2, 'MUSLIM'),
(3, 'CHRISTIA'),
(4, 'SIKH'),
(5, 'BUDDHIST'),
(6, 'PARSI'),
(7, 'JAIN'),
(8, 'OTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `mst_school_type`
--

CREATE TABLE `mst_school_type` (
  `school_type_code` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_school_type`
--

INSERT INTO `mst_school_type` (`school_type_code`, `description`) VALUES
(1, 'Boy\'s'),
(2, 'Girls\'s'),
(3, 'Co-ed');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `sch_name` varchar(255) NOT NULL,
  `sch_code` varchar(255) NOT NULL,
  `sch_address` varchar(255) NOT NULL,
  `sch_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`sch_name`, `sch_code`, `sch_address`, `sch_type`, `password`, `id`) VALUES
('Bhs', '001', 'Bali', 'Boy\'s', '1', 1),
('abc', '002', 'def', 'efg', '123', 2),
('abc', '003', 'def', 'efg', '123', 3),
('aaa', '007', 'aaasdfghj', 'aaa', 'a', 4),
('ssss', '008', 'adadadad', 'adadad', 'a', 5),
('asdfghj', '1', 'dgjhkj', 'wertyu', '1', 6),
('sdfgh', '11', 'fghjkll', 'fhgjkl;', '1', 7),
('asdfghjk', '9', 'dui', '1', '1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `student-info`
--

CREATE TABLE `student-info` (
  `id` int(11) NOT NULL,
  `sch_code` varchar(255) NOT NULL,
  `category_code` int(11) NOT NULL,
  `class_code` int(11) NOT NULL,
  `gender_code` int(11) NOT NULL,
  `school_type_code` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `is_draft` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student-info`
--

INSERT INTO `student-info` (`id`, `sch_code`, `category_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES
(2729, '001', 1, 1, 1, 3, 0, 0),
(2730, '001', 1, 1, 2, 3, 0, 0),
(2731, '001', 2, 1, 1, 3, 0, 0),
(2732, '001', 2, 1, 2, 3, 0, 0),
(2733, '001', 3, 1, 1, 3, 0, 0),
(2734, '001', 3, 1, 2, 3, 0, 0),
(2735, '001', 4, 1, 1, 3, 0, 0),
(2736, '001', 4, 1, 2, 3, 0, 0),
(2737, '001', 5, 1, 1, 3, 0, 0),
(2738, '001', 5, 1, 2, 3, 0, 0),
(2739, '001', 6, 1, 1, 3, 0, 0),
(2740, '001', 6, 1, 2, 3, 0, 0),
(2741, '001', 7, 1, 1, 3, 0, 0),
(2742, '001', 7, 1, 2, 3, 0, 0),
(2743, '001', 8, 1, 1, 3, 0, 0),
(2744, '001', 8, 1, 2, 3, 0, 0),
(2745, '001', 1, 2, 1, 3, 0, 0),
(2746, '001', 1, 2, 2, 3, 0, 0),
(2747, '001', 2, 2, 1, 3, 0, 0),
(2748, '001', 2, 2, 2, 3, 0, 0),
(2749, '001', 3, 2, 1, 3, 0, 0),
(2750, '001', 3, 2, 2, 3, 0, 0),
(2751, '001', 4, 2, 1, 3, 0, 0),
(2752, '001', 4, 2, 2, 3, 0, 0),
(2753, '001', 5, 2, 1, 3, 0, 0),
(2754, '001', 5, 2, 2, 3, 0, 0),
(2755, '001', 6, 2, 1, 3, 0, 0),
(2756, '001', 6, 2, 2, 3, 0, 0),
(2757, '001', 7, 2, 1, 3, 0, 0),
(2758, '001', 7, 2, 2, 3, 0, 0),
(2759, '001', 8, 2, 1, 3, 0, 0),
(2760, '001', 8, 2, 2, 3, 0, 0),
(2761, '001', 1, 3, 1, 3, 0, 0),
(2762, '001', 1, 3, 2, 3, 0, 0),
(2763, '001', 2, 3, 1, 3, 0, 0),
(2764, '001', 2, 3, 2, 3, 0, 0),
(2765, '001', 3, 3, 1, 3, 0, 0),
(2766, '001', 3, 3, 2, 3, 0, 0),
(2767, '001', 4, 3, 1, 3, 0, 0),
(2768, '001', 4, 3, 2, 3, 0, 0),
(2769, '001', 5, 3, 1, 3, 0, 0),
(2770, '001', 5, 3, 2, 3, 0, 0),
(2771, '001', 6, 3, 1, 3, 0, 0),
(2772, '001', 6, 3, 2, 3, 0, 0),
(2773, '001', 7, 3, 1, 3, 0, 0),
(2774, '001', 7, 3, 2, 3, 0, 0),
(2775, '001', 8, 3, 1, 3, 0, 0),
(2776, '001', 8, 3, 2, 3, 0, 0),
(2777, '001', 1, 4, 1, 3, 0, 0),
(2778, '001', 1, 4, 2, 3, 0, 0),
(2779, '001', 2, 4, 1, 3, 0, 0),
(2780, '001', 2, 4, 2, 3, 0, 0),
(2781, '001', 3, 4, 1, 3, 0, 0),
(2782, '001', 3, 4, 2, 3, 0, 0),
(2783, '001', 4, 4, 1, 3, 0, 0),
(2784, '001', 4, 4, 2, 3, 0, 0),
(2785, '001', 5, 4, 1, 3, 0, 0),
(2786, '001', 5, 4, 2, 3, 0, 0),
(2787, '001', 6, 4, 1, 3, 0, 0),
(2788, '001', 6, 4, 2, 3, 0, 0),
(2789, '001', 7, 4, 1, 3, 0, 0),
(2790, '001', 7, 4, 2, 3, 0, 0),
(2791, '001', 8, 4, 1, 3, 0, 0),
(2792, '001', 8, 4, 2, 3, 0, 0),
(2793, '001', 1, 5, 1, 3, 0, 0),
(2794, '001', 1, 5, 2, 3, 0, 0),
(2795, '001', 2, 5, 1, 3, 0, 0),
(2796, '001', 2, 5, 2, 3, 0, 0),
(2797, '001', 3, 5, 1, 3, 0, 0),
(2798, '001', 3, 5, 2, 3, 0, 0),
(2799, '001', 4, 5, 1, 3, 0, 0),
(2800, '001', 4, 5, 2, 3, 0, 0),
(2801, '001', 5, 5, 1, 3, 0, 0),
(2802, '001', 5, 5, 2, 3, 0, 0),
(2803, '001', 6, 5, 1, 3, 0, 0),
(2804, '001', 6, 5, 2, 3, 0, 0),
(2805, '001', 7, 5, 1, 3, 0, 0),
(2806, '001', 7, 5, 2, 3, 0, 0),
(2807, '001', 8, 5, 1, 3, 0, 0),
(2808, '001', 8, 5, 2, 3, 0, 0),
(2809, '001', 1, 6, 1, 3, 0, 0),
(2810, '001', 1, 6, 2, 3, 0, 0),
(2811, '001', 2, 6, 1, 3, 0, 0),
(2812, '001', 2, 6, 2, 3, 0, 0),
(2813, '001', 3, 6, 1, 3, 0, 0),
(2814, '001', 3, 6, 2, 3, 0, 0),
(2815, '001', 4, 6, 1, 3, 0, 0),
(2816, '001', 4, 6, 2, 3, 0, 0),
(2817, '001', 5, 6, 1, 3, 0, 0),
(2818, '001', 5, 6, 2, 3, 0, 0),
(2819, '001', 6, 6, 1, 3, 0, 0),
(2820, '001', 6, 6, 2, 3, 0, 0),
(2821, '001', 7, 6, 1, 3, 0, 0),
(2822, '001', 7, 6, 2, 3, 0, 0),
(2823, '001', 8, 6, 1, 3, 0, 0),
(2824, '001', 8, 6, 2, 3, 0, 0),
(2825, '001', 1, 7, 1, 3, 0, 0),
(2826, '001', 1, 7, 2, 3, 0, 0),
(2827, '001', 2, 7, 1, 3, 0, 0),
(2828, '001', 2, 7, 2, 3, 0, 0),
(2829, '001', 3, 7, 1, 3, 0, 0),
(2830, '001', 3, 7, 2, 3, 0, 0),
(2831, '001', 4, 7, 1, 3, 0, 0),
(2832, '001', 4, 7, 2, 3, 0, 0),
(2833, '001', 5, 7, 1, 3, 0, 0),
(2834, '001', 5, 7, 2, 3, 0, 0),
(2835, '001', 6, 7, 1, 3, 0, 0),
(2836, '001', 6, 7, 2, 3, 0, 0),
(2837, '001', 7, 7, 1, 3, 0, 0),
(2838, '001', 7, 7, 2, 3, 0, 0),
(2839, '001', 8, 7, 1, 3, 0, 0),
(2840, '001', 8, 7, 2, 3, 0, 0),
(2841, '001', 1, 8, 1, 3, 0, 0),
(2842, '001', 1, 8, 2, 3, 0, 0),
(2843, '001', 2, 8, 1, 3, 0, 0),
(2844, '001', 2, 8, 2, 3, 0, 0),
(2845, '001', 3, 8, 1, 3, 0, 0),
(2846, '001', 3, 8, 2, 3, 0, 0),
(2847, '001', 4, 8, 1, 3, 0, 0),
(2848, '001', 4, 8, 2, 3, 0, 0),
(2849, '001', 5, 8, 1, 3, 0, 0),
(2850, '001', 5, 8, 2, 3, 0, 0),
(2851, '001', 6, 8, 1, 3, 0, 0),
(2852, '001', 6, 8, 2, 3, 0, 0),
(2853, '001', 7, 8, 1, 3, 0, 0),
(2854, '001', 7, 8, 2, 3, 0, 0),
(2855, '001', 8, 8, 1, 3, 0, 0),
(2856, '001', 8, 8, 2, 3, 0, 0),
(2857, '001', 1, 9, 1, 3, 0, 0),
(2858, '001', 1, 9, 2, 3, 0, 0),
(2859, '001', 2, 9, 1, 3, 0, 0),
(2860, '001', 2, 9, 2, 3, 0, 0),
(2861, '001', 3, 9, 1, 3, 0, 0),
(2862, '001', 3, 9, 2, 3, 0, 0),
(2863, '001', 4, 9, 1, 3, 0, 0),
(2864, '001', 4, 9, 2, 3, 0, 0),
(2865, '001', 5, 9, 1, 3, 0, 0),
(2866, '001', 5, 9, 2, 3, 0, 0),
(2867, '001', 6, 9, 1, 3, 0, 0),
(2868, '001', 6, 9, 2, 3, 0, 0),
(2869, '001', 7, 9, 1, 3, 0, 0),
(2870, '001', 7, 9, 2, 3, 0, 0),
(2871, '001', 8, 9, 1, 3, 0, 0),
(2872, '001', 8, 9, 2, 3, 0, 0),
(2873, '001', 1, 10, 1, 3, 0, 0),
(2874, '001', 1, 10, 2, 3, 0, 0),
(2875, '001', 2, 10, 1, 3, 0, 0),
(2876, '001', 2, 10, 2, 3, 0, 0),
(2877, '001', 3, 10, 1, 3, 0, 0),
(2878, '001', 3, 10, 2, 3, 0, 0),
(2879, '001', 4, 10, 1, 3, 0, 0),
(2880, '001', 4, 10, 2, 3, 0, 0),
(2881, '001', 5, 10, 1, 3, 0, 0),
(2882, '001', 5, 10, 2, 3, 0, 0),
(2883, '001', 6, 10, 1, 3, 0, 0),
(2884, '001', 6, 10, 2, 3, 0, 0),
(2885, '001', 7, 10, 1, 3, 0, 0),
(2886, '001', 7, 10, 2, 3, 0, 0),
(2887, '001', 8, 10, 1, 3, 0, 0),
(2888, '001', 8, 10, 2, 3, 0, 0),
(2889, '001', 1, 11, 1, 3, 0, 0),
(2890, '001', 1, 11, 2, 3, 0, 0),
(2891, '001', 2, 11, 1, 3, 0, 0),
(2892, '001', 2, 11, 2, 3, 0, 0),
(2893, '001', 3, 11, 1, 3, 0, 0),
(2894, '001', 3, 11, 2, 3, 0, 0),
(2895, '001', 4, 11, 1, 3, 0, 0),
(2896, '001', 4, 11, 2, 3, 0, 0),
(2897, '001', 5, 11, 1, 3, 0, 0),
(2898, '001', 5, 11, 2, 3, 0, 0),
(2899, '001', 6, 11, 1, 3, 0, 0),
(2900, '001', 6, 11, 2, 3, 0, 0),
(2901, '001', 7, 11, 1, 3, 0, 0),
(2902, '001', 7, 11, 2, 3, 0, 0),
(2903, '001', 8, 11, 1, 3, 0, 0),
(2904, '001', 8, 11, 2, 3, 0, 0),
(2905, '001', 1, 12, 1, 3, 0, 0),
(2906, '001', 1, 12, 2, 3, 0, 0),
(2907, '001', 2, 12, 1, 3, 0, 0),
(2908, '001', 2, 12, 2, 3, 0, 0),
(2909, '001', 3, 12, 1, 3, 0, 0),
(2910, '001', 3, 12, 2, 3, 0, 0),
(2911, '001', 4, 12, 1, 3, 0, 0),
(2912, '001', 4, 12, 2, 3, 0, 0),
(2913, '001', 5, 12, 1, 3, 0, 0),
(2914, '001', 5, 12, 2, 3, 0, 0),
(2915, '001', 6, 12, 1, 3, 0, 0),
(2916, '001', 6, 12, 2, 3, 0, 0),
(2917, '001', 7, 12, 1, 3, 0, 0),
(2918, '001', 7, 12, 2, 3, 0, 0),
(2919, '001', 8, 12, 1, 3, 0, 0),
(2920, '001', 8, 12, 2, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_relig_info`
--

CREATE TABLE `student_relig_info` (
  `id` int(11) NOT NULL,
  `sch_code` varchar(255) NOT NULL,
  `religion_code` int(11) NOT NULL,
  `class_code` int(11) NOT NULL,
  `gender_code` int(11) NOT NULL,
  `school_type_code` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `is_draft` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_relig_info`
--

INSERT INTO `student_relig_info` (`id`, `sch_code`, `religion_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES
(2337, '001', 1, 1, 1, 3, 0, 0),
(2338, '001', 1, 1, 2, 3, 0, 0),
(2339, '001', 2, 1, 1, 3, 0, 0),
(2340, '001', 2, 1, 2, 3, 0, 0),
(2341, '001', 3, 1, 1, 3, 0, 0),
(2342, '001', 3, 1, 2, 3, 0, 0),
(2343, '001', 4, 1, 1, 3, 0, 0),
(2344, '001', 4, 1, 2, 3, 0, 0),
(2345, '001', 5, 1, 1, 3, 0, 0),
(2346, '001', 5, 1, 2, 3, 0, 0),
(2347, '001', 6, 1, 1, 3, 0, 0),
(2348, '001', 6, 1, 2, 3, 0, 0),
(2349, '001', 7, 1, 1, 3, 0, 0),
(2350, '001', 7, 1, 2, 3, 0, 0),
(2351, '001', 8, 1, 1, 3, 0, 0),
(2352, '001', 8, 1, 2, 3, 0, 0),
(2353, '001', 1, 2, 1, 3, 0, 0),
(2354, '001', 1, 2, 2, 3, 0, 0),
(2355, '001', 2, 2, 1, 3, 0, 0),
(2356, '001', 2, 2, 2, 3, 0, 0),
(2357, '001', 3, 2, 1, 3, 0, 0),
(2358, '001', 3, 2, 2, 3, 0, 0),
(2359, '001', 4, 2, 1, 3, 0, 0),
(2360, '001', 4, 2, 2, 3, 0, 0),
(2361, '001', 5, 2, 1, 3, 0, 0),
(2362, '001', 5, 2, 2, 3, 0, 0),
(2363, '001', 6, 2, 1, 3, 0, 0),
(2364, '001', 6, 2, 2, 3, 0, 0),
(2365, '001', 7, 2, 1, 3, 0, 0),
(2366, '001', 7, 2, 2, 3, 0, 0),
(2367, '001', 8, 2, 1, 3, 0, 0),
(2368, '001', 8, 2, 2, 3, 0, 0),
(2369, '001', 1, 3, 1, 3, 0, 0),
(2370, '001', 1, 3, 2, 3, 0, 0),
(2371, '001', 2, 3, 1, 3, 0, 0),
(2372, '001', 2, 3, 2, 3, 0, 0),
(2373, '001', 3, 3, 1, 3, 0, 0),
(2374, '001', 3, 3, 2, 3, 0, 0),
(2375, '001', 4, 3, 1, 3, 0, 0),
(2376, '001', 4, 3, 2, 3, 0, 0),
(2377, '001', 5, 3, 1, 3, 0, 0),
(2378, '001', 5, 3, 2, 3, 0, 0),
(2379, '001', 6, 3, 1, 3, 0, 0),
(2380, '001', 6, 3, 2, 3, 0, 0),
(2381, '001', 7, 3, 1, 3, 0, 0),
(2382, '001', 7, 3, 2, 3, 0, 0),
(2383, '001', 8, 3, 1, 3, 0, 0),
(2384, '001', 8, 3, 2, 3, 0, 0),
(2385, '001', 1, 4, 1, 3, 0, 0),
(2386, '001', 1, 4, 2, 3, 0, 0),
(2387, '001', 2, 4, 1, 3, 0, 0),
(2388, '001', 2, 4, 2, 3, 0, 0),
(2389, '001', 3, 4, 1, 3, 0, 0),
(2390, '001', 3, 4, 2, 3, 0, 0),
(2391, '001', 4, 4, 1, 3, 0, 0),
(2392, '001', 4, 4, 2, 3, 0, 0),
(2393, '001', 5, 4, 1, 3, 0, 0),
(2394, '001', 5, 4, 2, 3, 0, 0),
(2395, '001', 6, 4, 1, 3, 0, 0),
(2396, '001', 6, 4, 2, 3, 0, 0),
(2397, '001', 7, 4, 1, 3, 0, 0),
(2398, '001', 7, 4, 2, 3, 0, 0),
(2399, '001', 8, 4, 1, 3, 0, 0),
(2400, '001', 8, 4, 2, 3, 0, 0),
(2401, '001', 1, 5, 1, 3, 0, 0),
(2402, '001', 1, 5, 2, 3, 0, 0),
(2403, '001', 2, 5, 1, 3, 0, 0),
(2404, '001', 2, 5, 2, 3, 0, 0),
(2405, '001', 3, 5, 1, 3, 0, 0),
(2406, '001', 3, 5, 2, 3, 0, 0),
(2407, '001', 4, 5, 1, 3, 0, 0),
(2408, '001', 4, 5, 2, 3, 0, 0),
(2409, '001', 5, 5, 1, 3, 0, 0),
(2410, '001', 5, 5, 2, 3, 0, 0),
(2411, '001', 6, 5, 1, 3, 0, 0),
(2412, '001', 6, 5, 2, 3, 0, 0),
(2413, '001', 7, 5, 1, 3, 0, 0),
(2414, '001', 7, 5, 2, 3, 0, 0),
(2415, '001', 8, 5, 1, 3, 0, 0),
(2416, '001', 8, 5, 2, 3, 0, 0),
(2417, '001', 1, 6, 1, 3, 0, 0),
(2418, '001', 1, 6, 2, 3, 0, 0),
(2419, '001', 2, 6, 1, 3, 0, 0),
(2420, '001', 2, 6, 2, 3, 0, 0),
(2421, '001', 3, 6, 1, 3, 0, 0),
(2422, '001', 3, 6, 2, 3, 0, 0),
(2423, '001', 4, 6, 1, 3, 0, 0),
(2424, '001', 4, 6, 2, 3, 0, 0),
(2425, '001', 5, 6, 1, 3, 0, 0),
(2426, '001', 5, 6, 2, 3, 0, 0),
(2427, '001', 6, 6, 1, 3, 0, 0),
(2428, '001', 6, 6, 2, 3, 0, 0),
(2429, '001', 7, 6, 1, 3, 0, 0),
(2430, '001', 7, 6, 2, 3, 0, 0),
(2431, '001', 8, 6, 1, 3, 0, 0),
(2432, '001', 8, 6, 2, 3, 0, 0),
(2433, '001', 1, 7, 1, 3, 0, 0),
(2434, '001', 1, 7, 2, 3, 0, 0),
(2435, '001', 2, 7, 1, 3, 0, 0),
(2436, '001', 2, 7, 2, 3, 0, 0),
(2437, '001', 3, 7, 1, 3, 0, 0),
(2438, '001', 3, 7, 2, 3, 0, 0),
(2439, '001', 4, 7, 1, 3, 0, 0),
(2440, '001', 4, 7, 2, 3, 0, 0),
(2441, '001', 5, 7, 1, 3, 0, 0),
(2442, '001', 5, 7, 2, 3, 0, 0),
(2443, '001', 6, 7, 1, 3, 0, 0),
(2444, '001', 6, 7, 2, 3, 0, 0),
(2445, '001', 7, 7, 1, 3, 0, 0),
(2446, '001', 7, 7, 2, 3, 0, 0),
(2447, '001', 8, 7, 1, 3, 0, 0),
(2448, '001', 8, 7, 2, 3, 0, 0),
(2449, '001', 1, 8, 1, 3, 0, 0),
(2450, '001', 1, 8, 2, 3, 0, 0),
(2451, '001', 2, 8, 1, 3, 0, 0),
(2452, '001', 2, 8, 2, 3, 0, 0),
(2453, '001', 3, 8, 1, 3, 0, 0),
(2454, '001', 3, 8, 2, 3, 0, 0),
(2455, '001', 4, 8, 1, 3, 0, 0),
(2456, '001', 4, 8, 2, 3, 0, 0),
(2457, '001', 5, 8, 1, 3, 0, 0),
(2458, '001', 5, 8, 2, 3, 0, 0),
(2459, '001', 6, 8, 1, 3, 0, 0),
(2460, '001', 6, 8, 2, 3, 0, 0),
(2461, '001', 7, 8, 1, 3, 0, 0),
(2462, '001', 7, 8, 2, 3, 0, 0),
(2463, '001', 8, 8, 1, 3, 0, 0),
(2464, '001', 8, 8, 2, 3, 0, 0),
(2465, '001', 1, 9, 1, 3, 0, 0),
(2466, '001', 1, 9, 2, 3, 0, 0),
(2467, '001', 2, 9, 1, 3, 0, 0),
(2468, '001', 2, 9, 2, 3, 0, 0),
(2469, '001', 3, 9, 1, 3, 0, 0),
(2470, '001', 3, 9, 2, 3, 0, 0),
(2471, '001', 4, 9, 1, 3, 0, 0),
(2472, '001', 4, 9, 2, 3, 0, 0),
(2473, '001', 5, 9, 1, 3, 0, 0),
(2474, '001', 5, 9, 2, 3, 0, 0),
(2475, '001', 6, 9, 1, 3, 0, 0),
(2476, '001', 6, 9, 2, 3, 0, 0),
(2477, '001', 7, 9, 1, 3, 0, 0),
(2478, '001', 7, 9, 2, 3, 0, 0),
(2479, '001', 8, 9, 1, 3, 0, 0),
(2480, '001', 8, 9, 2, 3, 0, 0),
(2481, '001', 1, 10, 1, 3, 0, 0),
(2482, '001', 1, 10, 2, 3, 0, 0),
(2483, '001', 2, 10, 1, 3, 0, 0),
(2484, '001', 2, 10, 2, 3, 0, 0),
(2485, '001', 3, 10, 1, 3, 0, 0),
(2486, '001', 3, 10, 2, 3, 0, 0),
(2487, '001', 4, 10, 1, 3, 0, 0),
(2488, '001', 4, 10, 2, 3, 0, 0),
(2489, '001', 5, 10, 1, 3, 0, 0),
(2490, '001', 5, 10, 2, 3, 0, 0),
(2491, '001', 6, 10, 1, 3, 0, 0),
(2492, '001', 6, 10, 2, 3, 0, 0),
(2493, '001', 7, 10, 1, 3, 0, 0),
(2494, '001', 7, 10, 2, 3, 0, 0),
(2495, '001', 8, 10, 1, 3, 0, 0),
(2496, '001', 8, 10, 2, 3, 0, 0),
(2497, '001', 1, 11, 1, 3, 0, 0),
(2498, '001', 1, 11, 2, 3, 0, 0),
(2499, '001', 2, 11, 1, 3, 0, 0),
(2500, '001', 2, 11, 2, 3, 0, 0),
(2501, '001', 3, 11, 1, 3, 0, 0),
(2502, '001', 3, 11, 2, 3, 0, 0),
(2503, '001', 4, 11, 1, 3, 0, 0),
(2504, '001', 4, 11, 2, 3, 0, 0),
(2505, '001', 5, 11, 1, 3, 0, 0),
(2506, '001', 5, 11, 2, 3, 0, 0),
(2507, '001', 6, 11, 1, 3, 0, 0),
(2508, '001', 6, 11, 2, 3, 0, 0),
(2509, '001', 7, 11, 1, 3, 0, 0),
(2510, '001', 7, 11, 2, 3, 0, 0),
(2511, '001', 8, 11, 1, 3, 0, 0),
(2512, '001', 8, 11, 2, 3, 0, 0),
(2513, '001', 1, 12, 1, 3, 0, 0),
(2514, '001', 1, 12, 2, 3, 0, 0),
(2515, '001', 2, 12, 1, 3, 0, 0),
(2516, '001', 2, 12, 2, 3, 0, 0),
(2517, '001', 3, 12, 1, 3, 0, 0),
(2518, '001', 3, 12, 2, 3, 0, 0),
(2519, '001', 4, 12, 1, 3, 0, 0),
(2520, '001', 4, 12, 2, 3, 0, 0),
(2521, '001', 5, 12, 1, 3, 0, 0),
(2522, '001', 5, 12, 2, 3, 0, 0),
(2523, '001', 6, 12, 1, 3, 0, 0),
(2524, '001', 6, 12, 2, 3, 0, 0),
(2525, '001', 7, 12, 1, 3, 0, 0),
(2526, '001', 7, 12, 2, 3, 0, 0),
(2527, '001', 8, 12, 1, 3, 0, 0),
(2528, '001', 8, 12, 2, 3, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `mst_category`
--
ALTER TABLE `mst_category`
  ADD PRIMARY KEY (`category_code`);

--
-- Indexes for table `mst_class`
--
ALTER TABLE `mst_class`
  ADD PRIMARY KEY (`class_code`);

--
-- Indexes for table `mst_gender`
--
ALTER TABLE `mst_gender`
  ADD PRIMARY KEY (`gender_code`);

--
-- Indexes for table `mst_religion`
--
ALTER TABLE `mst_religion`
  ADD PRIMARY KEY (`religion_code`);

--
-- Indexes for table `mst_school_type`
--
ALTER TABLE `mst_school_type`
  ADD PRIMARY KEY (`school_type_code`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`sch_code`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student-info`
--
ALTER TABLE `student-info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_code` (`category_code`),
  ADD KEY `class_code` (`class_code`),
  ADD KEY `gender_code` (`gender_code`),
  ADD KEY `school_type_code` (`school_type_code`),
  ADD KEY `sch_code` (`sch_code`);

--
-- Indexes for table `student_relig_info`
--
ALTER TABLE `student_relig_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_code` (`class_code`),
  ADD KEY `gender_code` (`gender_code`),
  ADD KEY `religion_code` (`religion_code`),
  ADD KEY `school_type_code` (`school_type_code`),
  ADD KEY `sch_code` (`sch_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_category`
--
ALTER TABLE `mst_category`
  MODIFY `category_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mst_class`
--
ALTER TABLE `mst_class`
  MODIFY `class_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mst_gender`
--
ALTER TABLE `mst_gender`
  MODIFY `gender_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_religion`
--
ALTER TABLE `mst_religion`
  MODIFY `religion_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mst_school_type`
--
ALTER TABLE `mst_school_type`
  MODIFY `school_type_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student-info`
--
ALTER TABLE `student-info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2921;

--
-- AUTO_INCREMENT for table `student_relig_info`
--
ALTER TABLE `student_relig_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2529;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student-info`
--
ALTER TABLE `student-info`
  ADD CONSTRAINT `student-info_ibfk_1` FOREIGN KEY (`category_code`) REFERENCES `mst_category` (`category_code`),
  ADD CONSTRAINT `student-info_ibfk_2` FOREIGN KEY (`class_code`) REFERENCES `mst_class` (`class_code`),
  ADD CONSTRAINT `student-info_ibfk_3` FOREIGN KEY (`gender_code`) REFERENCES `mst_gender` (`gender_code`),
  ADD CONSTRAINT `student-info_ibfk_5` FOREIGN KEY (`school_type_code`) REFERENCES `mst_school_type` (`school_type_code`),
  ADD CONSTRAINT `student-info_ibfk_6` FOREIGN KEY (`sch_code`) REFERENCES `school` (`sch_code`);

--
-- Constraints for table `student_relig_info`
--
ALTER TABLE `student_relig_info`
  ADD CONSTRAINT `student_relig_info_ibfk_1` FOREIGN KEY (`class_code`) REFERENCES `mst_class` (`class_code`),
  ADD CONSTRAINT `student_relig_info_ibfk_2` FOREIGN KEY (`gender_code`) REFERENCES `mst_gender` (`gender_code`),
  ADD CONSTRAINT `student_relig_info_ibfk_3` FOREIGN KEY (`religion_code`) REFERENCES `mst_religion` (`religion_code`),
  ADD CONSTRAINT `student_relig_info_ibfk_4` FOREIGN KEY (`school_type_code`) REFERENCES `mst_school_type` (`school_type_code`),
  ADD CONSTRAINT `student_relig_info_ibfk_5` FOREIGN KEY (`sch_code`) REFERENCES `school` (`sch_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
