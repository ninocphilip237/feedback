-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 06:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_details`
--

CREATE TABLE `add_details` (
  `id` int(100) NOT NULL,
  `name` varchar(70) NOT NULL,
  `duration` varchar(70) NOT NULL,
  `date` text DEFAULT NULL,
  `venue` varchar(60) NOT NULL,
  `fac_type` text NOT NULL,
  `faculty` varchar(60) NOT NULL,
  `fac_id` text DEFAULT NULL,
  `course` varchar(150) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_details`
--

INSERT INTO `add_details` (`id`, `name`, `duration`, `date`, `venue`, `fac_type`, `faculty`, `fac_id`, `course`, `added_date`, `status`) VALUES
(1, 'test2', '2hr', '27-07-2020,13-07-2020', 'test', 'external', 'Praveen N V', '06c468b6-b072-434e-a90e-31b1af8bded9', 'test', '2020-08-06 17:07:12', 0),
(2, 'test3', '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020', 'Room1', 'internal', '', '', 'test', '2020-08-13 18:43:17', 1),
(3, 'hr test', '2hr', '04-08-2020,26-08-2020,29-08-2020,10-09-2020', 'Room1', 'internal', '', '', 'test', '2020-08-14 01:25:12', 1),
(4, 'hr test3', '2hr', '04-08-2020,26-08-2020,29-08-2020,10-09-2020', 'Room1', 'internal', '', '', 'test', '2020-08-14 01:25:13', 0),
(5, 'test4', '2hr', '09-09-2020,24-09-2020,18-09-2020', 'Room1', 'internal', '', '', 'test', '2020-08-14 01:27:00', 1),
(6, 'hr test2', '2hr', '05-08-2020,03-09-2020,02-10-2020,05-11-2020,13-11-2020', 'Room1', 'internal', '', '', 'test', '2020-08-14 01:28:41', 0),
(7, 'test6', '2hr', '24-09-2020,25-09-2020', 'Room1', 'internal', '', '', 'test', '2020-08-14 01:34:22', 0),
(8, 'effect', '2hr', '12-06-2019,13-06-2019,14-06-2019', 'Room1', 'internal', '', '', 'test', '2020-08-14 16:31:53', 1),
(9, 'hr test4', '2hr', '28-07-2020,30-07-2020', 'Room1', 'internal', '', '', 'test', '2020-08-14 21:37:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(100) NOT NULL,
  `date` text NOT NULL,
  `duration` float NOT NULL DEFAULT 0,
  `user_id` text NOT NULL,
  `admin_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `duration`, `user_id`, `admin_id`) VALUES
(1, '14-08-2020', 1, '06c468b6-b072-434e-a90e-31b1af8bded9', '3'),
(2, '14-08-2020', 1, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', '3'),
(3, '15-08-2020', 1, '06c468b6-b072-434e-a90e-31b1af8bded9', '6'),
(4, '15-08-2020', 1, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', '6'),
(5, '25-08-2020', 2, '06c468b6-b072-434e-a90e-31b1af8bded9', '3'),
(6, '25-08-2020', 2, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', '3'),
(7, '14-08-2020', 1, '06c468b6-b072-434e-a90e-31b1af8bded9', '2'),
(8, '14-08-2020', 1, '0d701d7e-a85c-40f7-9081-dcb1377e8817', '2'),
(9, '14-08-2020', 1, '0eaab7fe-d5b7-4365-9905-ee250ed2eb8d', '2'),
(10, '14-08-2020', 1, '17b53b89-d531-40a0-a731-252cca31dc87', '2'),
(11, '14-08-2020', 1, '17b781bf-5138-4213-9570-6de0f3c90fbe', '2'),
(12, '14-08-2020', 1, '1b363567-258d-4a05-b640-3bc997ebe6a4', '2'),
(13, '14-08-2020', 1, '22e8ea46-2144-466b-a60d-fee742a475e7', '2'),
(14, '14-08-2020', 1, '2401bd00-65ce-45f1-b7e6-215f63766c3a', '2'),
(15, '14-08-2020', 1, '267461bc-c39c-4771-83dd-04fe89dff783', '2'),
(16, '14-08-2020', 1, '2f3a0487-bb3a-4a30-9515-0b92e2a574d8', '2'),
(17, '14-08-2020', 1, '366cd7d6-034f-4630-b1c7-0b163e351ec9', '2'),
(18, '14-08-2020', 1, '380cde86-ab55-43d0-bd5b-2e87bf20ae70', '2'),
(19, '14-08-2020', 1, '3ae1fc2d-d311-4929-9242-dbf28fc1525e', '2'),
(20, '14-08-2020', 1, '3b06510c-4b71-4c50-9981-d88489c58583', '2'),
(21, '14-08-2020', 1, '3f306dff-d70e-4277-921d-19b1f5a46c4e', '2'),
(22, '14-08-2020', 1, '411b3fb5-b4fc-48bd-88b5-9bdcb4961e42', '2'),
(23, '14-08-2020', 1, '44ada3fd-b603-460e-890c-b69a5c746aec', '2'),
(24, '14-08-2020', 1, '46e2176a-0601-4253-8938-0d132968a289', '2'),
(25, '14-08-2020', 1, '4c487b76-24b8-49f9-a6eb-8d86fd4da1b6', '2'),
(26, '14-08-2020', 1, '50e51c87-21f3-4887-9e36-b091011e45f8', '2'),
(27, '14-08-2020', 1, '5225133a-41f9-409b-b64e-f912777bfcf9', '2'),
(28, '14-08-2020', 1, '5da4bc30-5985-4722-83fe-ebe66bdeca32', '2'),
(29, '14-08-2020', 1, '5ef687e3-c4bf-406a-a295-a49e1374c499', '2'),
(30, '14-08-2020', 1, '613bd281-53f6-41d4-81a7-420bc755a556', '2'),
(31, '14-08-2020', 1, '63f2890f-35c8-43d3-8c82-b11e1f9dc101', '2'),
(32, '14-08-2020', 1, '64e19268-ca52-4f57-9539-0716a69b6d03', '2'),
(33, '14-08-2020', 1, '6947a7f0-89af-426a-b364-11dbf701e856', '2'),
(34, '14-08-2020', 1, '69ed482b-31d3-4fa5-8542-46e18122f2a6', '2'),
(35, '14-08-2020', 1, '6c113d3c-47d4-48a3-ba43-0bc52bef6834', '2'),
(36, '14-08-2020', 1, '6cf56063-ea14-429a-8dfd-7ef9803ff7d9', '2'),
(37, '14-08-2020', 1, '6e482dd9-28e6-4e1e-a256-eba0f86317b9', '2'),
(38, '14-08-2020', 1, '70a8d16d-f33d-472a-8c9b-ce3a9d8c1a93', '2'),
(39, '14-08-2020', 1, '77f92caa-6011-40ac-afb2-6ba48b223502', '2'),
(40, '14-08-2020', 1, '7884efb5-f612-4b84-a0f7-e355723b684a', '2'),
(41, '14-08-2020', 1, '7999a9bb-a914-4163-8f48-c499fc24a78f', '2'),
(42, '14-08-2020', 1, '7ba389f0-b858-4ad4-b98e-79bdbbe2cdd8', '2'),
(43, '14-08-2020', 1, '7db5608e-0666-4595-9dab-0bf8bd462e23', '2'),
(44, '14-08-2020', 1, '87e9f374-0610-4ccc-8f6f-263e017ade4e', '2'),
(45, '14-08-2020', 1, '8dafe192-f5b5-4502-9773-157a76c431cc', '2'),
(46, '14-08-2020', 1, '90d1e152-4edf-46df-b43f-98a57203c72c', '2'),
(47, '14-08-2020', 1, '9841d33b-65ab-4cd1-83ba-50358f6d7758', '2'),
(48, '14-08-2020', 1, 'a12f7a69-b662-4bc9-9401-51c16649249d', '2'),
(49, '14-08-2020', 1, 'a150ba05-fa98-41c3-8bcd-67153913108a', '2'),
(50, '14-08-2020', 1, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', '2'),
(51, '14-08-2020', 1, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', '2'),
(52, '14-08-2020', 1, 'a9a75e6f-7b75-41db-a9af-a2dc4f875db9', '2'),
(53, '14-08-2020', 1, 'aa881bac-13e4-45e7-8985-9741385166b7', '2'),
(54, '14-08-2020', 1, 'ac2473bb-c19a-4cae-ba29-ffe5f618041c', '2'),
(55, '14-08-2020', 1, 'ae9e8a97-8397-43f1-92ce-4cf7e2917b1f', '2'),
(56, '14-08-2020', 1, 'b3e4ee87-e97f-4f8d-af9f-700f3bc088cb', '2'),
(57, '14-08-2020', 1, 'b956628b-cf26-4354-9fff-3bcd38b3b1d6', '2'),
(58, '14-08-2020', 1, 'bae19010-dac7-4bd9-89dc-8eb53ff4a67f', '2'),
(59, '14-08-2020', 1, 'baeeeaf4-c5f1-4652-b5d5-651825edd54a', '2'),
(60, '14-08-2020', 1, 'bbb80228-e258-41c7-b8bb-6bfaf39ce28a', '2'),
(61, '14-08-2020', 1, 'bd721e6d-574c-45d7-b235-5b2a8f3757e6', '2'),
(62, '14-08-2020', 1, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', '2'),
(63, '14-08-2020', 1, 'c4f0cd53-98e9-451c-b19b-711bedf4e7fd', '2'),
(64, '14-08-2020', 1, 'c516834b-e341-43b0-95ba-ee264c53e2c9', '2'),
(65, '14-08-2020', 1, 'c7f6b639-6572-443f-a536-abf732ff86cd', '2'),
(66, '14-08-2020', 1, 'cbd865d9-31fc-400d-a975-81b589b31fe9', '2'),
(67, '14-08-2020', 1, 'd015d1f7-eba1-4b9b-978b-3ad2cc647ba8', '2'),
(68, '14-08-2020', 1, 'd4adccfa-8b7f-486b-8792-04b6eacecb7f', '2'),
(69, '14-08-2020', 1, 'd508a6b3-1d82-401f-8226-c348ebe9755e', '2'),
(70, '14-08-2020', 1, 'd530e4d2-9063-403a-b6db-721c4266a0d2', '2'),
(71, '14-08-2020', 1, 'd5eacce8-f859-4050-b7ce-020d012890f0', '2'),
(72, '14-08-2020', 1, 'd81c5d8c-2b4e-4071-8ec1-4bcb7e66adb4', '2'),
(73, '14-08-2020', 1, 'db84e268-ff53-4c04-a000-26b944c6eb0c', '2'),
(74, '14-08-2020', 1, 'dbdf2d1b-8f19-4bad-9ff8-69d907c777a2', '2'),
(75, '14-08-2020', 1, 'dfa7fe1c-883d-4427-bfa8-bbaf9c7be414', '2'),
(76, '14-08-2020', 1, 'e1666851-e416-4ef4-b5a4-613f781d61dc', '2'),
(77, '14-08-2020', 1, 'e17c9904-3c9c-4716-ba8a-5200e402394f', '2'),
(78, '14-08-2020', 1, 'e352a04f-6752-49ba-80ea-2215909e082e', '2'),
(79, '14-08-2020', 1, 'e55ce9bd-9cdb-4ac8-b580-c62b3846acf0', '2'),
(80, '14-08-2020', 1, 'e702200a-4df1-4ce6-ae27-11e32469445a', '2'),
(81, '14-08-2020', 1, 'ee28183d-cbcd-47a2-ba97-ea833546549b', '2'),
(82, '14-08-2020', 1, 'ef75e8b1-07b0-4687-864b-2fd09ec28f34', '2'),
(83, '14-08-2020', 1, 'efc620dc-6c22-4cb0-8108-47648369fb28', '2'),
(84, '14-08-2020', 1, 'f4c65db0-0bbc-47b1-bb62-648ac671a9f8', '2'),
(85, '14-08-2020', 1, 'fb4d27ab-3414-4954-9851-4c64f82a3f49', '2'),
(86, '14-08-2020', 1, 'fd8d255e-c288-42b8-b985-14fab13d43e8', '2'),
(87, '14-08-2020', 1, 'fe8536e0-dbac-429d-b425-e1071e7a9ecd', '2'),
(88, '14-08-2020', 1, '06c468b6-b072-434e-a90e-31b1af8bded9', '2'),
(89, '14-08-2020', 1, '0d701d7e-a85c-40f7-9081-dcb1377e8817', '2'),
(90, '14-08-2020', 1, '0eaab7fe-d5b7-4365-9905-ee250ed2eb8d', '2'),
(91, '14-08-2020', 1, '17b53b89-d531-40a0-a731-252cca31dc87', '2'),
(92, '14-08-2020', 1, '17b781bf-5138-4213-9570-6de0f3c90fbe', '2'),
(93, '14-08-2020', 1, '1b363567-258d-4a05-b640-3bc997ebe6a4', '2'),
(94, '14-08-2020', 1, '22e8ea46-2144-466b-a60d-fee742a475e7', '2'),
(95, '14-08-2020', 1, '2401bd00-65ce-45f1-b7e6-215f63766c3a', '2'),
(96, '14-08-2020', 1, '267461bc-c39c-4771-83dd-04fe89dff783', '2'),
(97, '14-08-2020', 1, '2f3a0487-bb3a-4a30-9515-0b92e2a574d8', '2'),
(98, '14-08-2020', 1, '366cd7d6-034f-4630-b1c7-0b163e351ec9', '2'),
(99, '14-08-2020', 1, '380cde86-ab55-43d0-bd5b-2e87bf20ae70', '2'),
(100, '14-08-2020', 1, '3ae1fc2d-d311-4929-9242-dbf28fc1525e', '2'),
(101, '14-08-2020', 1, '3b06510c-4b71-4c50-9981-d88489c58583', '2'),
(102, '14-08-2020', 1, '3f306dff-d70e-4277-921d-19b1f5a46c4e', '2'),
(103, '14-08-2020', 1, '411b3fb5-b4fc-48bd-88b5-9bdcb4961e42', '2'),
(104, '14-08-2020', 1, '44ada3fd-b603-460e-890c-b69a5c746aec', '2'),
(105, '14-08-2020', 1, '46e2176a-0601-4253-8938-0d132968a289', '2'),
(106, '14-08-2020', 1, '4c487b76-24b8-49f9-a6eb-8d86fd4da1b6', '2'),
(107, '14-08-2020', 1, '50e51c87-21f3-4887-9e36-b091011e45f8', '2'),
(108, '14-08-2020', 1, '5225133a-41f9-409b-b64e-f912777bfcf9', '2'),
(109, '14-08-2020', 1, '5da4bc30-5985-4722-83fe-ebe66bdeca32', '2'),
(110, '14-08-2020', 1, '5ef687e3-c4bf-406a-a295-a49e1374c499', '2'),
(111, '14-08-2020', 1, '613bd281-53f6-41d4-81a7-420bc755a556', '2'),
(112, '14-08-2020', 1, '63f2890f-35c8-43d3-8c82-b11e1f9dc101', '2'),
(113, '14-08-2020', 1, '64e19268-ca52-4f57-9539-0716a69b6d03', '2'),
(114, '14-08-2020', 1, '6947a7f0-89af-426a-b364-11dbf701e856', '2'),
(115, '14-08-2020', 1, '69ed482b-31d3-4fa5-8542-46e18122f2a6', '2'),
(116, '14-08-2020', 1, '6c113d3c-47d4-48a3-ba43-0bc52bef6834', '2'),
(117, '14-08-2020', 1, '6cf56063-ea14-429a-8dfd-7ef9803ff7d9', '2'),
(118, '14-08-2020', 1, '6e482dd9-28e6-4e1e-a256-eba0f86317b9', '2'),
(119, '14-08-2020', 1, '70a8d16d-f33d-472a-8c9b-ce3a9d8c1a93', '2'),
(120, '14-08-2020', 1, '77f92caa-6011-40ac-afb2-6ba48b223502', '2'),
(121, '14-08-2020', 1, '7884efb5-f612-4b84-a0f7-e355723b684a', '2'),
(122, '14-08-2020', 1, '7999a9bb-a914-4163-8f48-c499fc24a78f', '2'),
(123, '14-08-2020', 1, '7ba389f0-b858-4ad4-b98e-79bdbbe2cdd8', '2'),
(124, '14-08-2020', 1, '7db5608e-0666-4595-9dab-0bf8bd462e23', '2'),
(125, '14-08-2020', 1, '87e9f374-0610-4ccc-8f6f-263e017ade4e', '2'),
(126, '14-08-2020', 1, '8dafe192-f5b5-4502-9773-157a76c431cc', '2'),
(127, '14-08-2020', 1, '90d1e152-4edf-46df-b43f-98a57203c72c', '2'),
(128, '14-08-2020', 1, '9841d33b-65ab-4cd1-83ba-50358f6d7758', '2'),
(129, '14-08-2020', 1, 'a12f7a69-b662-4bc9-9401-51c16649249d', '2'),
(130, '14-08-2020', 1, 'a150ba05-fa98-41c3-8bcd-67153913108a', '2'),
(131, '14-08-2020', 1, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', '2'),
(132, '14-08-2020', 1, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', '2'),
(133, '14-08-2020', 1, 'a9a75e6f-7b75-41db-a9af-a2dc4f875db9', '2'),
(134, '14-08-2020', 1, 'aa881bac-13e4-45e7-8985-9741385166b7', '2'),
(135, '14-08-2020', 1, 'ac2473bb-c19a-4cae-ba29-ffe5f618041c', '2'),
(136, '14-08-2020', 1, 'ae9e8a97-8397-43f1-92ce-4cf7e2917b1f', '2'),
(137, '14-08-2020', 1, 'b3e4ee87-e97f-4f8d-af9f-700f3bc088cb', '2'),
(138, '14-08-2020', 1, 'b956628b-cf26-4354-9fff-3bcd38b3b1d6', '2'),
(139, '14-08-2020', 1, 'bae19010-dac7-4bd9-89dc-8eb53ff4a67f', '2'),
(140, '14-08-2020', 1, 'baeeeaf4-c5f1-4652-b5d5-651825edd54a', '2'),
(141, '14-08-2020', 1, 'bbb80228-e258-41c7-b8bb-6bfaf39ce28a', '2'),
(142, '14-08-2020', 1, 'bd721e6d-574c-45d7-b235-5b2a8f3757e6', '2'),
(143, '14-08-2020', 1, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', '2'),
(144, '14-08-2020', 1, 'c4f0cd53-98e9-451c-b19b-711bedf4e7fd', '2'),
(145, '14-08-2020', 1, 'c516834b-e341-43b0-95ba-ee264c53e2c9', '2'),
(146, '14-08-2020', 1, 'c7f6b639-6572-443f-a536-abf732ff86cd', '2'),
(147, '14-08-2020', 1, 'cbd865d9-31fc-400d-a975-81b589b31fe9', '2'),
(148, '14-08-2020', 1, 'd015d1f7-eba1-4b9b-978b-3ad2cc647ba8', '2'),
(149, '14-08-2020', 1, 'd4adccfa-8b7f-486b-8792-04b6eacecb7f', '2'),
(150, '14-08-2020', 1, 'd508a6b3-1d82-401f-8226-c348ebe9755e', '2'),
(151, '14-08-2020', 1, 'd530e4d2-9063-403a-b6db-721c4266a0d2', '2'),
(152, '14-08-2020', 1, 'd5eacce8-f859-4050-b7ce-020d012890f0', '2'),
(153, '14-08-2020', 1, 'd81c5d8c-2b4e-4071-8ec1-4bcb7e66adb4', '2'),
(154, '14-08-2020', 1, 'db84e268-ff53-4c04-a000-26b944c6eb0c', '2'),
(155, '14-08-2020', 1, 'dbdf2d1b-8f19-4bad-9ff8-69d907c777a2', '2'),
(156, '14-08-2020', 1, 'dfa7fe1c-883d-4427-bfa8-bbaf9c7be414', '2'),
(157, '14-08-2020', 1, 'e1666851-e416-4ef4-b5a4-613f781d61dc', '2'),
(158, '14-08-2020', 1, 'e17c9904-3c9c-4716-ba8a-5200e402394f', '2'),
(159, '14-08-2020', 1, 'e352a04f-6752-49ba-80ea-2215909e082e', '2'),
(160, '14-08-2020', 1, 'e55ce9bd-9cdb-4ac8-b580-c62b3846acf0', '2'),
(161, '14-08-2020', 1, 'e702200a-4df1-4ce6-ae27-11e32469445a', '2'),
(162, '14-08-2020', 1, 'ee28183d-cbcd-47a2-ba97-ea833546549b', '2'),
(163, '14-08-2020', 1, 'ef75e8b1-07b0-4687-864b-2fd09ec28f34', '2'),
(164, '14-08-2020', 1, 'efc620dc-6c22-4cb0-8108-47648369fb28', '2'),
(165, '14-08-2020', 1, 'f4c65db0-0bbc-47b1-bb62-648ac671a9f8', '2'),
(166, '14-08-2020', 1, 'fb4d27ab-3414-4954-9851-4c64f82a3f49', '2'),
(167, '14-08-2020', 1, 'fd8d255e-c288-42b8-b985-14fab13d43e8', '2'),
(168, '14-08-2020', 1, 'fe8536e0-dbac-429d-b425-e1071e7a9ecd', '2'),
(169, '27-08-2020', 1, '06c468b6-b072-434e-a90e-31b1af8bded9', '2'),
(170, '27-08-2020', 1, '0d701d7e-a85c-40f7-9081-dcb1377e8817', '2'),
(171, '27-08-2020', 1, '0eaab7fe-d5b7-4365-9905-ee250ed2eb8d', '2'),
(172, '27-08-2020', 1, '17b53b89-d531-40a0-a731-252cca31dc87', '2'),
(173, '27-08-2020', 1, '17b781bf-5138-4213-9570-6de0f3c90fbe', '2'),
(174, '27-08-2020', 1, '1b363567-258d-4a05-b640-3bc997ebe6a4', '2'),
(175, '27-08-2020', 1, '22e8ea46-2144-466b-a60d-fee742a475e7', '2'),
(176, '27-08-2020', 1, '2401bd00-65ce-45f1-b7e6-215f63766c3a', '2'),
(177, '27-08-2020', 1, '267461bc-c39c-4771-83dd-04fe89dff783', '2'),
(178, '27-08-2020', 1, '2f3a0487-bb3a-4a30-9515-0b92e2a574d8', '2'),
(179, '27-08-2020', 1, '366cd7d6-034f-4630-b1c7-0b163e351ec9', '2'),
(180, '27-08-2020', 1, '380cde86-ab55-43d0-bd5b-2e87bf20ae70', '2'),
(181, '27-08-2020', 1, '3ae1fc2d-d311-4929-9242-dbf28fc1525e', '2'),
(182, '27-08-2020', 1, '3b06510c-4b71-4c50-9981-d88489c58583', '2'),
(183, '27-08-2020', 1, '3f306dff-d70e-4277-921d-19b1f5a46c4e', '2'),
(184, '27-08-2020', 1, '411b3fb5-b4fc-48bd-88b5-9bdcb4961e42', '2'),
(185, '27-08-2020', 1, '44ada3fd-b603-460e-890c-b69a5c746aec', '2'),
(186, '27-08-2020', 1, '46e2176a-0601-4253-8938-0d132968a289', '2'),
(187, '27-08-2020', 1, '4c487b76-24b8-49f9-a6eb-8d86fd4da1b6', '2'),
(188, '27-08-2020', 1, '50e51c87-21f3-4887-9e36-b091011e45f8', '2'),
(189, '27-08-2020', 1, '5225133a-41f9-409b-b64e-f912777bfcf9', '2'),
(190, '27-08-2020', 1, '5da4bc30-5985-4722-83fe-ebe66bdeca32', '2'),
(191, '27-08-2020', 1, '5ef687e3-c4bf-406a-a295-a49e1374c499', '2'),
(192, '27-08-2020', 1, '613bd281-53f6-41d4-81a7-420bc755a556', '2'),
(193, '27-08-2020', 1, '63f2890f-35c8-43d3-8c82-b11e1f9dc101', '2'),
(194, '27-08-2020', 1, '64e19268-ca52-4f57-9539-0716a69b6d03', '2'),
(195, '27-08-2020', 1, '6947a7f0-89af-426a-b364-11dbf701e856', '2'),
(196, '27-08-2020', 1, '69ed482b-31d3-4fa5-8542-46e18122f2a6', '2'),
(197, '27-08-2020', 1, '6c113d3c-47d4-48a3-ba43-0bc52bef6834', '2'),
(198, '27-08-2020', 1, '6cf56063-ea14-429a-8dfd-7ef9803ff7d9', '2'),
(199, '27-08-2020', 1, '6e482dd9-28e6-4e1e-a256-eba0f86317b9', '2'),
(200, '27-08-2020', 1, '70a8d16d-f33d-472a-8c9b-ce3a9d8c1a93', '2'),
(201, '27-08-2020', 1, '77f92caa-6011-40ac-afb2-6ba48b223502', '2'),
(202, '27-08-2020', 1, '7884efb5-f612-4b84-a0f7-e355723b684a', '2'),
(203, '27-08-2020', 1, '7999a9bb-a914-4163-8f48-c499fc24a78f', '2'),
(204, '27-08-2020', 1, '7ba389f0-b858-4ad4-b98e-79bdbbe2cdd8', '2'),
(205, '27-08-2020', 1, '7db5608e-0666-4595-9dab-0bf8bd462e23', '2'),
(206, '27-08-2020', 1, '87e9f374-0610-4ccc-8f6f-263e017ade4e', '2'),
(207, '27-08-2020', 1, '8dafe192-f5b5-4502-9773-157a76c431cc', '2'),
(208, '27-08-2020', 1, '90d1e152-4edf-46df-b43f-98a57203c72c', '2'),
(209, '27-08-2020', 1, '9841d33b-65ab-4cd1-83ba-50358f6d7758', '2'),
(210, '27-08-2020', 1, 'a12f7a69-b662-4bc9-9401-51c16649249d', '2'),
(211, '27-08-2020', 1, 'a150ba05-fa98-41c3-8bcd-67153913108a', '2'),
(212, '27-08-2020', 1, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', '2'),
(213, '27-08-2020', 1, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', '2'),
(214, '27-08-2020', 1, 'a9a75e6f-7b75-41db-a9af-a2dc4f875db9', '2'),
(215, '27-08-2020', 1, 'aa881bac-13e4-45e7-8985-9741385166b7', '2'),
(216, '27-08-2020', 1, 'ac2473bb-c19a-4cae-ba29-ffe5f618041c', '2'),
(217, '27-08-2020', 1, 'ae9e8a97-8397-43f1-92ce-4cf7e2917b1f', '2'),
(218, '27-08-2020', 1, 'b3e4ee87-e97f-4f8d-af9f-700f3bc088cb', '2'),
(219, '27-08-2020', 1, 'b956628b-cf26-4354-9fff-3bcd38b3b1d6', '2'),
(220, '27-08-2020', 1, 'bae19010-dac7-4bd9-89dc-8eb53ff4a67f', '2'),
(221, '27-08-2020', 1, 'baeeeaf4-c5f1-4652-b5d5-651825edd54a', '2'),
(222, '27-08-2020', 1, 'bbb80228-e258-41c7-b8bb-6bfaf39ce28a', '2'),
(223, '27-08-2020', 1, 'bd721e6d-574c-45d7-b235-5b2a8f3757e6', '2'),
(224, '27-08-2020', 1, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', '2'),
(225, '27-08-2020', 1, 'c4f0cd53-98e9-451c-b19b-711bedf4e7fd', '2'),
(226, '27-08-2020', 1, 'c516834b-e341-43b0-95ba-ee264c53e2c9', '2'),
(227, '27-08-2020', 1, 'c7f6b639-6572-443f-a536-abf732ff86cd', '2'),
(228, '27-08-2020', 1, 'cbd865d9-31fc-400d-a975-81b589b31fe9', '2'),
(229, '27-08-2020', 1, 'd015d1f7-eba1-4b9b-978b-3ad2cc647ba8', '2'),
(230, '27-08-2020', 1, 'd4adccfa-8b7f-486b-8792-04b6eacecb7f', '2'),
(231, '27-08-2020', 1, 'd508a6b3-1d82-401f-8226-c348ebe9755e', '2'),
(232, '27-08-2020', 1, 'd530e4d2-9063-403a-b6db-721c4266a0d2', '2'),
(233, '27-08-2020', 1, 'd5eacce8-f859-4050-b7ce-020d012890f0', '2'),
(234, '27-08-2020', 1, 'd81c5d8c-2b4e-4071-8ec1-4bcb7e66adb4', '2'),
(235, '27-08-2020', 1, 'db84e268-ff53-4c04-a000-26b944c6eb0c', '2'),
(236, '27-08-2020', 1, 'dbdf2d1b-8f19-4bad-9ff8-69d907c777a2', '2'),
(237, '27-08-2020', 1, 'dfa7fe1c-883d-4427-bfa8-bbaf9c7be414', '2'),
(238, '27-08-2020', 1, 'e1666851-e416-4ef4-b5a4-613f781d61dc', '2'),
(239, '27-08-2020', 1, 'e17c9904-3c9c-4716-ba8a-5200e402394f', '2'),
(240, '27-08-2020', 1, 'e352a04f-6752-49ba-80ea-2215909e082e', '2'),
(241, '27-08-2020', 1, 'e55ce9bd-9cdb-4ac8-b580-c62b3846acf0', '2'),
(242, '27-08-2020', 1, 'e702200a-4df1-4ce6-ae27-11e32469445a', '2'),
(243, '27-08-2020', 1, 'ee28183d-cbcd-47a2-ba97-ea833546549b', '2'),
(244, '27-08-2020', 1, 'ef75e8b1-07b0-4687-864b-2fd09ec28f34', '2'),
(245, '27-08-2020', 1, 'efc620dc-6c22-4cb0-8108-47648369fb28', '2'),
(246, '27-08-2020', 1, 'f4c65db0-0bbc-47b1-bb62-648ac671a9f8', '2'),
(247, '27-08-2020', 1, 'fb4d27ab-3414-4954-9851-4c64f82a3f49', '2'),
(248, '27-08-2020', 1, 'fd8d255e-c288-42b8-b985-14fab13d43e8', '2'),
(249, '27-08-2020', 1, 'fe8536e0-dbac-429d-b425-e1071e7a9ecd', '2'),
(250, '14-08-2020', 1, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', '5'),
(251, '14-08-2020', 2, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', '8'),
(252, '14-08-2020', 1, '06c468b6-b072-434e-a90e-31b1af8bded9', '9'),
(253, '14-08-2020', 1, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', '9');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(30) NOT NULL,
  `fac_id` text NOT NULL,
  `faculty` text NOT NULL,
  `admin_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fac_id`, `faculty`, `admin_id`) VALUES
(1, '06c468b6-b072-434e-a90e-31b1af8bded9', 'Praveen N V', 2),
(2, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem P A', 2),
(3, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', 'Ajanth  R', 2),
(4, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem P A', 3),
(5, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika Elizabeth Roji', 3),
(8, '06c468b6-b072-434e-a90e-31b1af8bded9', 'Praveen N V', 5),
(9, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem P A', 5),
(10, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', 'Ajanth  R', 5),
(11, '0d701d7e-a85c-40f7-9081-dcb1377e8817', 'Manek Ravi', 6),
(12, '17b781bf-5138-4213-9570-6de0f3c90fbe', 'Jishnu  V Jayaraj', 6),
(13, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', 'Ajanth  R', 6),
(14, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika Elizabeth Roji', 6),
(15, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem P A', 4),
(16, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika Elizabeth Roji', 4),
(17, '0d701d7e-a85c-40f7-9081-dcb1377e8817', 'Manek Ravi', 7),
(18, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem P A', 7),
(19, '06c468b6-b072-434e-a90e-31b1af8bded9', 'Praveen N V', 8),
(20, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem P A', 8),
(21, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika Elizabeth Roji', 8),
(22, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika Elizabeth Roji', 9);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(250) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` text DEFAULT NULL,
  `faculty_knw` text DEFAULT NULL,
  `communi_skill` text DEFAULT NULL,
  `commitment` text DEFAULT NULL,
  `general_view` text DEFAULT NULL,
  `weakness` text DEFAULT NULL,
  `strenth` text DEFAULT NULL,
  `addition` text DEFAULT NULL,
  `deletion` text DEFAULT NULL,
  `met_obj` text DEFAULT NULL,
  `admin_id` int(10) NOT NULL,
  `f_duration` text DEFAULT NULL,
  `f_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `user_name`, `faculty_knw`, `communi_skill`, `commitment`, `general_view`, `weakness`, `strenth`, `addition`, `deletion`, `met_obj`, `admin_id`, `f_duration`, `f_date`) VALUES
(1, '0d701d7e-a85c-40f7-9081-dcb1377e8817', 'Manek Ravi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2hr', '27-07-2020,13-07-2020'),
(2, '17b53b89-d531-40a0-a731-252cca31dc87', 'Vimal Pillai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2hr', '27-07-2020,13-07-2020'),
(3, '06c468b6-b072-434e-a90e-31b1af8bded9', 'Praveen N V', 'Excellent', 'Very Good', 'Good', 'Very Good', '', '', '', '', '', 2, '3 Hrs', '14-08-2020,14-08-2020,27-08-2020'),
(4, '0d701d7e-a85c-40f7-9081-dcb1377e8817', 'Manek Ravi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(5, '0eaab7fe-d5b7-4365-9905-ee250ed2eb8d', 'Rangeetha K M', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(6, '17b53b89-d531-40a0-a731-252cca31dc87', 'Vimal Pillai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(7, '17b781bf-5138-4213-9570-6de0f3c90fbe', 'Jishnu  V Jayaraj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(8, '1b363567-258d-4a05-b640-3bc997ebe6a4', 'Rejith M R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(9, '22e8ea46-2144-466b-a60d-fee742a475e7', 'Ajay Jose', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(10, '2401bd00-65ce-45f1-b7e6-215f63766c3a', 'Leena  Ali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(11, '267461bc-c39c-4771-83dd-04fe89dff783', 'Vishnu Somarajan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(12, '2f3a0487-bb3a-4a30-9515-0b92e2a574d8', 'Ashin Ashok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(13, '366cd7d6-034f-4630-b1c7-0b163e351ec9', 'Jackson Joseph', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(14, '380cde86-ab55-43d0-bd5b-2e87bf20ae70', 'Lincy  Anna Chacko', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(15, '3ae1fc2d-d311-4929-9242-dbf28fc1525e', 'Nikhin K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(16, '3b06510c-4b71-4c50-9981-d88489c58583', 'Vandana  NF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(17, '3f306dff-d70e-4277-921d-19b1f5a46c4e', 'Dennis Jose', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(18, '411b3fb5-b4fc-48bd-88b5-9bdcb4961e42', 'Vijeesh Kumar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(19, '44ada3fd-b603-460e-890c-b69a5c746aec', 'Divya Nair', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(20, '46e2176a-0601-4253-8938-0d132968a289', 'Anunadh K G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(21, '4c487b76-24b8-49f9-a6eb-8d86fd4da1b6', 'Elizabeth  Francis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(22, '50e51c87-21f3-4887-9e36-b091011e45f8', 'Adith  Suresh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(23, '5225133a-41f9-409b-b64e-f912777bfcf9', 'Abhijith  Sugunan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(24, '5da4bc30-5985-4722-83fe-ebe66bdeca32', 'Manoj Devarajan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(25, '5ef687e3-c4bf-406a-a295-a49e1374c499', 'Suraj N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(26, '613bd281-53f6-41d4-81a7-420bc755a556', 'Nujin Jacob', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(27, '63f2890f-35c8-43d3-8c82-b11e1f9dc101', 'Anu K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(28, '64e19268-ca52-4f57-9539-0716a69b6d03', 'Aswathy P Asokan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(29, '6947a7f0-89af-426a-b364-11dbf701e856', 'Alamgir Ahmed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(30, '69ed482b-31d3-4fa5-8542-46e18122f2a6', 'Rahul B S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(31, '6c113d3c-47d4-48a3-ba43-0bc52bef6834', 'AMBILY M.B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(32, '6cf56063-ea14-429a-8dfd-7ef9803ff7d9', 'Arun  V K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(33, '6e482dd9-28e6-4e1e-a256-eba0f86317b9', 'Gregory Wilson', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(34, '70a8d16d-f33d-472a-8c9b-ce3a9d8c1a93', 'Shyam Kumar  K S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(35, '77f92caa-6011-40ac-afb2-6ba48b223502', 'Shijin M V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(36, '7884efb5-f612-4b84-a0f7-e355723b684a', 'Akhil P Babu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(37, '7999a9bb-a914-4163-8f48-c499fc24a78f', 'Alex  Paul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(38, '7ba389f0-b858-4ad4-b98e-79bdbbe2cdd8', 'Anju Bose', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(39, '7db5608e-0666-4595-9dab-0bf8bd462e23', 'Shinto Joseph', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(40, '87e9f374-0610-4ccc-8f6f-263e017ade4e', 'Francis Vimal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(41, '8dafe192-f5b5-4502-9773-157a76c431cc', 'Sachin Sreevalsan ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(42, '90d1e152-4edf-46df-b43f-98a57203c72c', 'Abel James', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(43, '9841d33b-65ab-4cd1-83ba-50358f6d7758', 'Shanto  A C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(44, 'a12f7a69-b662-4bc9-9401-51c16649249d', 'Sumod Sasidharan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(45, 'a150ba05-fa98-41c3-8bcd-67153913108a', 'Ramees   M P P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(46, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem P A', 'Very Good', 'Very Good', 'Excellent', 'Excellent', '', '', '', '', '', 2, '3 Hrs', '14-08-2020,14-08-2020,27-08-2020'),
(47, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', 'Ajanth  R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(48, 'a9a75e6f-7b75-41db-a9af-a2dc4f875db9', 'Sreeshanth Shimji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(49, 'aa881bac-13e4-45e7-8985-9741385166b7', 'Vipin R T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(50, 'ac2473bb-c19a-4cae-ba29-ffe5f618041c', 'Alan John David', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(51, 'ae9e8a97-8397-43f1-92ce-4cf7e2917b1f', 'Aneesh P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(52, 'b3e4ee87-e97f-4f8d-af9f-700f3bc088cb', 'Navas A N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(53, 'b956628b-cf26-4354-9fff-3bcd38b3b1d6', 'Kiran  Wilson M', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(54, 'bae19010-dac7-4bd9-89dc-8eb53ff4a67f', 'Nijitha  N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(55, 'baeeeaf4-c5f1-4652-b5d5-651825edd54a', 'Ranish P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(56, 'bbb80228-e258-41c7-b8bb-6bfaf39ce28a', 'Abhiraj  R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(57, 'bd721e6d-574c-45d7-b235-5b2a8f3757e6', 'Sharon G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(58, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika Elizabeth Roji', 'Excellent', 'Fair', 'Good', 'Fair', '', '', '', '', '', 2, '3 Hrs', '14-08-2020,14-08-2020,27-08-2020'),
(59, 'c4f0cd53-98e9-451c-b19b-711bedf4e7fd', 'Sonal Varghese', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(60, 'c516834b-e341-43b0-95ba-ee264c53e2c9', 'Abhijith Simon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(61, 'c7f6b639-6572-443f-a536-abf732ff86cd', 'Anand Varkey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(62, 'cbd865d9-31fc-400d-a975-81b589b31fe9', 'Arun Bose', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(63, 'd015d1f7-eba1-4b9b-978b-3ad2cc647ba8', 'Amal   P S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(64, 'd4adccfa-8b7f-486b-8792-04b6eacecb7f', 'Mohammed Fazil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(65, 'd508a6b3-1d82-401f-8226-c348ebe9755e', 'Abhijith   C S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(66, 'd530e4d2-9063-403a-b6db-721c4266a0d2', 'Vidya  B Panicker', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(67, 'd5eacce8-f859-4050-b7ce-020d012890f0', 'Jithin Bose D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(68, 'd81c5d8c-2b4e-4071-8ec1-4bcb7e66adb4', 'Priyanka  J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(69, 'db84e268-ff53-4c04-a000-26b944c6eb0c', 'Veny K Varunny', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(70, 'dbdf2d1b-8f19-4bad-9ff8-69d907c777a2', 'Prasanth G Krishnan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(71, 'dfa7fe1c-883d-4427-bfa8-bbaf9c7be414', 'Roshil K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(72, 'e1666851-e416-4ef4-b5a4-613f781d61dc', 'Anas N.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(73, 'e17c9904-3c9c-4716-ba8a-5200e402394f', 'Alvin Mathew', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(74, 'e352a04f-6752-49ba-80ea-2215909e082e', 'Mahesh T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(75, 'e55ce9bd-9cdb-4ac8-b580-c62b3846acf0', 'Aswin Raj M K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(76, 'e702200a-4df1-4ce6-ae27-11e32469445a', 'Eldho George', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(77, 'ee28183d-cbcd-47a2-ba97-ea833546549b', 'Sanal A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(78, 'ef75e8b1-07b0-4687-864b-2fd09ec28f34', 'Sanoop M S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(79, 'efc620dc-6c22-4cb0-8108-47648369fb28', 'Saiful  Haq K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(80, 'f4c65db0-0bbc-47b1-bb62-648ac671a9f8', 'Nino C Philip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(81, 'fb4d27ab-3414-4954-9851-4c64f82a3f49', 'Sebastian Jose', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(82, 'fd8d255e-c288-42b8-b985-14fab13d43e8', 'Rahul R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(83, 'fe8536e0-dbac-429d-b425-e1071e7a9ecd', 'Vignesh  V S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(84, '06c468b6-b072-434e-a90e-31b1af8bded9', 'Praveen N V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2hr', '04-08-2020,26-08-2020,29-08-2020,10-09-2020'),
(85, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', 'Ajanth  R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2hr', '04-08-2020,26-08-2020,29-08-2020,10-09-2020'),
(86, '06c468b6-b072-434e-a90e-31b1af8bded9', 'Praveen N V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '2hr', '04-08-2020,26-08-2020,29-08-2020,10-09-2020'),
(87, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', 'Ajanth  R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '2hr', '04-08-2020,26-08-2020,29-08-2020,10-09-2020'),
(88, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika Elizabeth Roji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2hr', '09-09-2020,24-09-2020,18-09-2020'),
(89, '06c468b6-b072-434e-a90e-31b1af8bded9', 'Praveen N V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, '2hr', '05-08-2020,03-09-2020,02-10-2020,05-11-2020,13-11-2020'),
(90, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem P A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, '2hr', '05-08-2020,03-09-2020,02-10-2020,05-11-2020,13-11-2020'),
(91, '06c468b6-b072-434e-a90e-31b1af8bded9', 'Praveen N V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, '2hr', '24-09-2020,25-09-2020'),
(92, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', 'Ajanth  R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, '2hr', '24-09-2020,25-09-2020'),
(93, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika Elizabeth Roji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, '2hr', '24-09-2020,25-09-2020'),
(94, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', 'Ajanth  R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, '2hr', '12-06-2019,13-06-2019,14-06-2019'),
(95, '06c468b6-b072-434e-a90e-31b1af8bded9', 'Praveen N V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2hr', '28-07-2020,30-07-2020'),
(96, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika Elizabeth Roji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2hr', '28-07-2020,30-07-2020');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_effectiveness`
--

CREATE TABLE `feedback_effectiveness` (
  `id` int(250) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` text DEFAULT NULL,
  `learning_tp` text DEFAULT NULL,
  `app_learn` text DEFAULT NULL,
  `att_change` text DEFAULT NULL,
  `knw_dev` text DEFAULT NULL,
  `skill_dev` text DEFAULT NULL,
  `overall_rating` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `admin_id` int(10) NOT NULL,
  `f_duration` text DEFAULT NULL,
  `f_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_effectiveness`
--

INSERT INTO `feedback_effectiveness` (`id`, `user_id`, `user_name`, `learning_tp`, `app_learn`, `att_change`, `knw_dev`, `skill_dev`, `overall_rating`, `comments`, `admin_id`, `f_duration`, `f_date`) VALUES
(1, 'a493d16a-1f03-48b0-89a1-9081eaa5fa6d', 'Ajanth  R', '2', '4', '4', '1', '1', '1', 'comments\r\n', 8, '2hr', '12-06-2019,13-06-2019,14-06-2019');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_trainer`
--

CREATE TABLE `feedback_trainer` (
  `id` int(250) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` text DEFAULT NULL,
  `audience_pre` text DEFAULT NULL,
  `commitment` text DEFAULT NULL,
  `arrangement` text DEFAULT NULL,
  `general_view` text DEFAULT NULL,
  `c_objective` text DEFAULT NULL,
  `weakness` text DEFAULT NULL,
  `strenth` text DEFAULT NULL,
  `addition` text DEFAULT NULL,
  `deletion` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `questions` text DEFAULT NULL,
  `admin_id` int(10) NOT NULL,
  `f_duration` text DEFAULT NULL,
  `f_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_trainer`
--

INSERT INTO `feedback_trainer` (`id`, `user_id`, `user_name`, `audience_pre`, `commitment`, `arrangement`, `general_view`, `c_objective`, `weakness`, `strenth`, `addition`, `deletion`, `comments`, `questions`, `admin_id`, `f_duration`, `f_date`) VALUES
(1, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika', 'Excellent', 'Good', 'Fair', 'Very Good', 'test', '', '', '', '', '', '', 6, '2hr', '05-08-2020,03-09-2020,02-10-2020,05-11-2020,13-11-2020'),
(2, 'c08451e3-a4bb-487d-87fd-f3be5231b9d5', 'Sonika', 'Excellent', 'Very Good', 'Poor', 'Poor', 'test', '', '', '', '', '', '', 8, '2hr', '12-06-2019,13-06-2019,14-06-2019'),
(3, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem', 'Good', 'Very Good', 'Good', 'Good', 'test', '', '', '', '', '', '', 2, '2hr', '11-08-2020,19-08-2020,18-08-2020,21-08-2020'),
(4, 'a2cb9343-a65a-4d15-b106-0cfd0d56581b', 'Hakeem', 'Excellent', 'Good', 'Fair', 'Good', 'yfr', '', '', '', '', '', '', 5, '2hr', '09-09-2020,24-09-2020,18-09-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_details`
--
ALTER TABLE `add_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_effectiveness`
--
ALTER TABLE `feedback_effectiveness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_trainer`
--
ALTER TABLE `feedback_trainer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_details`
--
ALTER TABLE `add_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `feedback_effectiveness`
--
ALTER TABLE `feedback_effectiveness`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback_trainer`
--
ALTER TABLE `feedback_trainer`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
