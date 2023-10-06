-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306
-- Generation Time: Oct 06, 2023 at 02:36 PM
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
-- Database: `home_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `certificate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `user_id`, `certificate`) VALUES
(1, 4, 'certificate 1st'),
(2, 4, 'certificate 2nd'),
(3, 4, 'certificate 3rd');

-- --------------------------------------------------------

--
-- Table structure for table `educational_qualification`
--

CREATE TABLE `educational_qualification` (
  `id` int(11) NOT NULL,
  `highest_qualification` text NOT NULL,
  `highest_qualification_college` text NOT NULL,
  `highest_qualification_percentage` double NOT NULL,
  `highest_qualification_year` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_qualification`
--

INSERT INTO `educational_qualification` (`id`, `highest_qualification`, `highest_qualification_college`, `highest_qualification_percentage`, `highest_qualification_year`, `user_id`) VALUES
(1, 'Post Graduation', 'Apna College', 80, 2006, 4),
(2, '9th Standard', 'Apna School', 60, 2023, 7);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sender_id`, `receiver_id`, `message`, `time`) VALUES
(4, 7, 'hello', '2023-10-05 20:09:10'),
(4, 7, 'hello boy', '2023-10-05 20:09:40'),
(7, 4, 'hello sir', '2023-10-05 20:09:53'),
(7, 4, 'what happend', '2023-10-05 20:11:09'),
(4, 7, 'nothing boy', '2023-10-05 20:11:26'),
(4, 7, 'just messaged you', '2023-10-05 20:12:00'),
(7, 4, 'oh okay sir', '2023-10-05 20:13:06'),
(4, 7, 'yeah boy', '2023-10-05 20:13:21'),
(7, 4, 'okk sir', '2023-10-05 20:14:12'),
(7, 4, 'yes sir ', '2023-10-05 20:15:21'),
(7, 4, 'if there is anything please let me know', '2023-10-05 20:16:16'),
(4, 7, 'okk boy', '2023-10-05 20:16:27'),
(7, 4, 'okk sir thanks', '2023-10-05 20:47:00'),
(4, 7, 'wait', '2023-10-05 20:47:55'),
(7, 4, 'yes sir what happend', '2023-10-05 20:48:04'),
(4, 7, 'nothing', '2023-10-05 20:48:17'),
(4, 7, 'you just wait for 2 mins', '2023-10-05 20:48:41'),
(7, 4, 'okk sir', '2023-10-05 20:51:04'),
(7, 4, 'i am waiting', '2023-10-05 20:52:26'),
(4, 7, 'good ', '2023-10-05 20:52:38'),
(4, 7, 'keep waiting', '2023-10-05 20:54:59'),
(4, 7, 'wait please', '2023-10-05 20:55:16'),
(7, 8, 'hey sir', '2023-10-05 21:03:05'),
(7, 6, 'hello sir', '2023-10-05 21:03:11'),
(7, 5, 'hello sir', '2023-10-05 21:03:17'),
(7, 4, 'yes sir how much time', '2023-10-05 21:03:32'),
(4, 7, 'just few more minutes', '2023-10-05 21:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `other_details`
--

CREATE TABLE `other_details` (
  `id` int(11) NOT NULL,
  `languages_known` text NOT NULL,
  `no_of_hours` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_details`
--

INSERT INTO `other_details` (`id`, `languages_known`, `no_of_hours`, `user_id`) VALUES
(1, 'both', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `address` text NOT NULL,
  `pincode` text NOT NULL,
  `profile_pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `user_id`, `gender`, `dob`, `address`, `pincode`, `profile_pic`) VALUES
INSERT INTO `personal_details` (`id`, `user_id`, `gender`, `dob`, `address`, `pincode`, `profile_pic`) VALUES
(4, 7, 'male', '2001-10-01', 'Pratap vihar ghaziabad', '201009', 0xffd8ffe000104a46494600010100000100010000ffdb00840009060713121215121213161515161615151215151516161616151515161717151515181d2820181a261d151521322125292b2e2e2e171f3338332c37282d2e2b010a0a0a0e0d0e1a10101a2d251f202d2d2d2e2d2d2d2d2d2f2d2d2d2d2d2d2d2d2d2d2d2d2b2d2d352d2d2d2d2d2d2d2d2d2d2f2d2d2d2f2d2d2d2d2d2d2d2d2dffc000110800a8012c03012200021101031101ffc4001c0000010501010100000000000000000000020003040506010708ffc4004310000201020403060305060403090000000102000311041221310541510613226171813291a1425282b1c114233362729207a2b2f02463e1161743537383b3d1d2ffc4001a010002030101000000000000000000000000010203040506ffc400301100020201030105070403010000000000000102031104213112052241517113326191b1d1f081a1c1e115233314ffda000c03010002110311003f009d48423bc043a08fb6a2f331595154ead1ca4341e91a7e7fef9c7291d07a092f0196786a971e91e323e08ef2548098044e5a119db4421ab442385672d0006d06d1c9c020005a268538c2201b261f0eac52a65bd854374f2ac0683f1ae9eaa3ac0a40b9b5352e7f9761eac7c23e72cf0fd9d2d6359eda83969ee0a90478cf981b0997576d4a0e337b96d4a4a49a2ef09881516e37e63a18f48c30b95f3ae97f88723e63ce499e7658cec6c78f01451452244514514005145140051451400c7d74aa0b3554652cc589b5d4741996e2c00035b6d18acc0a1b10472b4dbca8e2782c2b5f3a8cc7729757f9afeb3b147696311947e5f62a74e5ec6570c011ac7957c53bc4708b44ae46273116a6f6ce149d5ee3603f9b7e50e96a7da75abb23647aa25338b8bc3095674e837f68898db2ec648ac4b4e394ce907785019c2236f1cbc17d60810c43bce4ec9318f05da3aa6ca6009d23432244ad65de751768f2d3d0ce04d0491227e0ad68f991f08ba5e3d7911315e76088422102628504c00569c9dbce440222335a896b116f09b9561756fe56b58dbdfe71e33b9f4d20d6766326e1bb414d6d4da91a5c940b7767c958587b1b19629c5299e647a8ff00ea65314f7fdd8019986c7e103ef3797e72d384f0d25556e4aa8b163b99c7d56969af74cdf4f7e3992fd4d153a8185d483e90a052a4145945840c462553e23edcfe53978cbc20c65ec3d148d82c5f799881602c0759260d34f0c1ac7228a28a44428a28a0028a28a003356896dd881d174f9999fe378f1409a7456d52de2a8e2e1411f62ff137d073e934d1ac4e192a0caeaac3a100fcba4be9b14649cd6579036f184cf3ea435cc492c756626e49ea4c9f4a5a633b376d68b7e073fe97e5ef7f595d4d4a9cae0abef94ef6ea3911e627a2a75355abb8ff004324e2d7270c18eb08369795884130ad3aab100dda13ec34d611d2376d6f7f68c637979c4443768168c0902396d2348b616871086c8d1bd23482e3da3ee343e919a7b0f48d0c994b4168e648d5231e8988e159db4e5a11880e41227489c220072d3b78ad06d00119171f8aeed6f94b12400002753ccd86824ab48b8fc7d3a099ea3586c3a93d00e6609676403184af94694ea3b1d5d8a04cc7f11161c80931bb505095a96a2aaa092c50017d9773af3993c676f292fc149d8f99551facc0710c577d59ea5ac198b8198b589dc663fefe523fe3558fbffb9a56a9f92c23d830bdb35c43f7141988033d5adb00a08d031ea6c36daf1da1c62854ce52aabe4f8c86bf9fbcf1cc3b9d573950d6cc3935b6bf5de5df657840a98aa5737084d46d3926a3fcd963b3b2a15c2534f0912af58dc9471bb3d93018c14e99e6c4e83d86f028e398d45663a6d6e401f2981e3fdb2b134b0b666d9aa9d557fa47da3e7b7ac5c2b89711c81bb9efd08b86202bb0fbd65d6de796608f65d9283b31cf9f25f2bea52713d72298ae1bfe205216a789a35a8b81ae642cb6eb71adbda68b03da2c25636a788a4c7eee701bfb4eb3916e96ea9f7a2cad493e19671440df68a6718a3756baadb31b5f68c710c67762c3e23b7979cabaf8bcf4ecdf103707a897574b96fe0591adbdcbaaf415c58fb11b8f499be319a832a80cf9ef94df2ae9b86279f909270d8d64194eabd2fa8f43ca1626a8ad4cd2736e74ea11f0b0d5491ebbf95e68aa2eb977b7892719c53e9289deab1f13e51d137f4ccdfa011fa74141bdb5ea4963f33ac65189dc588255874653661e971bf4b496ab3bf18422bba8e74ec94bde67184e15864420b245602d39db5a3ca20b888062a46ad1f6583ddc604770672d1f6a71b2b1a601c3802101001551a1f48d11a0f48e39dc7940e43d234048a3ca48b46690d047d62062b44442bc4044202d3968e181ce000913968e11040800c626bad34677365504b1f213ca7b47c59ebb976d2fa22fdc4e9ea7999acedef1450a2806d6e1aa7901f0a9f326c6de53cfacd55c2a29663a2aa8b93ec27434b5a8c7adf2f8f421279782291379d9eec723d026ba39ab516f4d501cf4d791b6d73e7a728d7657b30e9595f134ce8c7bb536cbe1172edd403a01d7da6ed091495c335eb12f929d83b20d17c77195156c77172d32ea2f7397b383c6376fec6fd3509aea91e4dc6b8055c2b95aaac177572b6d3619872e9bc88989ab4d5955acaeb9588dcadee403c81d2fe93daa9af7e292d653715aa51f1d8928d49dd736e0fc2a3d44c8718ec23f8eae16dddfd9a6766ea509f84740743e52756ae3297b2b3cb39f0fd485ba669e6bf9195e01835ad529d217209bbd85ce45059f41ceca40f3227b46091085a8a996e8145c58851b2db96df94f26eca6217078d57acad4fc2c8eac082a1ade30398b81a8e44cf56c0e29ea84a96191949366560083a10e3e2b89aee6db5e466ad633e65c71621d529300c1516e1803a917e7e53398decde11c78e928074d34173b69b7d2687887f11bdade96122b5adaedbebe5292d32e7b134d4de8d6ab4ba047651fe42b0cf06c7a7f07883f90a8038f7b827eb2b78ff688556c94dc8a22f98a5d5aa9042d83724b9b5f9d8c5c330cfdf1a740ad1aaaa1eeb51ab5274272b2d406fe306db4ae55572f7a29faa1e5921b85714bdce2683e9ade9ea4fc8584acc5f10c550aa9dfb532aaf6714d48255858eb9b95c1db94dcd1bd2a5fbda86a1504b3900663e8341d26078cf10016a9fb762474ccfa0d7de47ff2d4f6e944d5d35e26bc1bea257e1f195496ba2b00cebe16b1f0b10346d3600efce52f67daa36170f4ab5c1cca5086209a5e2086fd41cbec57acbae134dc1a82a0d45436236652ab661f5bf9de7321a6c36a5e1b1a2dd4ec9c46c551df6818778096560410ca00bf420adb6fbb2cd1676a2ed0c09a62ba560c539753c82561010ad3a1632072d38e238446ed001059d0272128800d1d603d392b25a032c00af531c06374e382480ed4d8fa46d0683d2155601493d27298d07a46b8025523b492246a4b7b192ad1098244ec2022022005c400758eb402358000d2bb8de22b2a65c3d32d51ae03681507de624fc84b42271941e71ad981e7f4bb0b52ab66af5ad7d485bbb13cc963617f9cd7766fb3390353c1d156751e3a951b28b904a86700937e806d2c42ea1141776d1106ec7f41d49d04d0f0bc0a251b546cd4d49354adff007d5d8d885b6ac8ba228e76f297f5cecf7b81c628c6b5d710e84b3953dd93650a8ca8aceba6fe26039f28694ffe1f084e83ba08ec2fba0164b8daed7f5cb6965c7b84bd076c4e45a78721415350b35366d0bb5c5954e5a62c18dade720f09e25482b53a841a2e58d373f01cc4e6424ede2b91d7369b4c4d745cd799d4a1ae842c0f0d76c1828de2a9512b29fba8c543283d4532faf53ce699540161a01a01d0748c70ec32d2a6b4d0dd545975bd96e6c2fcec2c3da3d9c751f3126f9c97258323da3c661ea1ab4df075ab0a3fc5a8ab4f2a59439b1670c6cac0f844c661f1b469e67c062aa506b91dd5752293b0d4ae737506d6def3d79716941c96a0d512aa94aad4d73b2d80b6641ab29171a5c8d34b6d178770ae148e6a252a85ac400d4abd9730b12032ef6d2e6e6d3554d28f262bba9cf0e39fcf331185edb62ecad570eb5948b67a24fd8001040bf8874d24fa7db9c1d4052a87a79815657426e0e84786f26f14ecd524a86ae0c9a4a757a4cb915981055d57930b1d46f7d418ed3a987aca4626859d6c18140e189dbbbb5cb5ec79723057e1e1acfa7e312d336b39c7afe229e960787d4fe062421e9994efcb2d41afa1973c270d87c386c9550b37c4ece9736d8596c00df41d6441d92c3b177ad42952a63e11b3dbef3b03957d3eb316f82c357a828d0c2b866a8150935573296015b5d81073697d3989356465c264274b82dda355da2ed05317a5dea1000cc41f89b7b585f4990358e36ad3a34c5d6e0b917b7f313d001702fb93353ff77b530b5d19cd0743ad50d48e54a6a09250973ae806b726f2db038651998285cf6b0000ca83e15b0f99f3260ef51e16e55387733906be055f272eed95948e5948d3d0816b49606b0a989d54d6642b02a6e23804175d4476d10026289cc4b000af0088e08ad001b22284c0ce400e980c61ac0cb002b29c7446923ca248085c58dd42fbc9587f845ba48d8b5049bf212560d7c22dd24bc064ca43411f809b47409122c19d0646c762ade04d5c8f641f79bf41ce51e2b13874367cb51bed3390493e64fe42553b545e3966cd3e8e56aea6f0be25c710e2b4680bd5a8abd05eec7d146a66731bdbb404f75499ff00998e41ec0027f28e7ed3846de8a9f4a61bf2101b87e06b68132375556a67f2b49d5a8a97fd20ff003f3ccba5d992c77268aaaddb7c49f856928fe9663f32dfa48a7b598afbebfd823bc4fb29552ed48f7a9d3671edb37b7ca67cf43a11b822c47a83b4ec50b4d6acd787f53977d5752f1358367d9bff0010aa61cbf7d452b0a9a332934ea2a5ad954ea2db9b69a9de7aa7663b4386c710d41c0149465a27c2ea48b1665e80682d71a9f29f3bc7f078ba945d6a5276a6ebaaba9b11ff004f2964f4b16bbbb108dcd727d3d8cc2ad40038cca0df21b6572360c398e76997c7f6353ba765b9705aaad116146fbf74a96dba5f9ebe522ff87ddb14c75fbf217134d351b21a62d9aa25f624fc43969ca6c387b975350dfc66ea36b20d174e571e2f79cf9d7be24b835c27e31679e700550f5290d51823aa92480185ac2fb0ba9d3ce58b53a6df0e1c37204a2aafcdb5f9093b88702a74dc6270abe15cc95a9a6d941d5d0736041b81bdcf3dda6667f818053f6c5989fe9e43d4dfd2659c5c59d1ae6a6b603074329bf76a9a5bc2e4dff0e5024b8c53c22839ad76fbcc4b37b13b7b47e40b5115f87523ba03e7adfe71dfd9d2d9728b69f4db58ece3381b903de0047c7e173a65b0362080db1236be87f28787c6628589fd9c116009a2490072bad45fa01395ea1069d8e85ecc3a8c8df9100c72b3900951988d72dec4fa46a4d7042508cb9456f1ac4d4650956a076a8c6f95722ad35b66555b93a9b03726f98c899f948f4ea2d577aaa2cad609a5aeab7f111d4924fa5a3d4e49fc4e6dd24e585c20e9dfca3804e2c31bc89483bc7099cbce9800ad027623003b382096894c601de0b08a280039a01686a97804400afa6248411aa621f7a010bccc6045c40f889e92660c5d47a090f8ce329d1425ae59b4455d598f403f5d84670984c4e2105d1912c2c3c3f5cc406fa8f284a5845f5532b1edc16b88e234d07c59adbe5b587ab1d07ce5762b8e3b29ee52dd18a97f96ca4fe2921783b20b8c3b3b0d8b35327d896f08f4025bf0dc080f7a8435450ad61f0a66cc065ea743e23ed69429ce4f8c23a0b474c16ef2cc86138263aa024a36a6e7bea894efe652986bfe230d783622990ac529137b0545b1b6f66502ff009cf428d6270eb5172b8b8f91046c41e47ce394135b17425d263061b123ff00194fb5bf43154c457a7f100cbccf2f72ba8fed225be2f06f475273a7de03c4a3f9d46e3cc7ca34ad7d46a3911314d38bef23741c64bbac630b890f716cac2c4a9b6c766046841ea247e2bc1a8e2078d6cdc9d7461efcfd0de338ea069b0a8a6ca2f6e94c9defff0028e971c8d8cb0c2e203adc6876653bab0dc1ff007ae8609b835283c0da534e1359305c5fb375a85d947794fef28f101fccbfa894a0cf5d99aed276696a035688cb506aca34153ae9c9bcf9cec693b59e546ef9fdce36b3b2561ce9f97d8c6e1312d4aa255423323065bea0906f661cd4ec4749f48f6738dd3c76152bd339732d9c5f5a6e07894f983fa4f9a04d5ff87fda0fd9ea9c3d56cb86c4b2ad7249012d7f10b7ded10f91bf29d5d457d51ea5e071aa9e1e19ef3c36a06a6a5572afd81fc97f0b795c6bef2a38b70fc8cd568aad82935a9ae86e350ea36cd6bdc697b097b5aaaa2963a281736e9e404af647141cdbf7b5771be56a9645bf92822ffd26739a4d619b63271794532b02011a822e0f50645ad5eaabe94b353b68cac33dfa643616f732663b87f739da8a814a9a2074d6f9b9f76a05af94a9b733055811706e0ec44cb28b8b3a15d8a6b6237ede83e3cc9fd6a40feedbeb0aa51a752c4e5623506e0dbcc19dc43b8f814379124466968a5eba524b5f506e2c77cc48122583b87c320259753b5ef7b7503a6d2938de316a565a14daccb715dd4ea1187f04f9b687cadd4c9b56bb32128a69d003e2032bd4bd805a4bf60126d98dbc87381c5383a0a39e95345a9488a8cca35caa6f554b6ed75cdbee75938c4cb75bb622454500580b01a003a43a62705a3a8b11ce3aa61c10275562011884e9115e007222228898c0e15882c40c4220386779471563589aca82ec6c20077946d8485538d531b027dad21b71873a850043227244da6246ada3d935a840373f0a2dfe26fad873b49618282c79024fa0d645a3419d4d34d6a54fe211a84cc2c589e4146c39d848d9371d972cd9a4a15926e5c2e7ec4fecd70d439ab38cf50dac5f521080574d812083e579a0153c457a007e648fd3eb20e0405af5907dac8cbe8aa29903d32afce49b7efafd29ebeeda7fa5a337ad87d980d4e8257e1aa1188a80fda5047fed9b11f275fac91c49ad49cff2990387135529d73a32917bee4140181f3b927da0865c45145100350d8123a19458dc1641ded11743abd351f0f5641f9afb8f3bbaed617e9bfa73959c3b1967743b02a47a30d0fcc18a51525864a3271794578218696208f504194f514e1ea06172874b0d49502f97cd945edd56e3909a1e2985ee98d41fc363e31c918fdaf253cfa1f5912bd10ea55b63d3423a107911314a2eb787c1ba3256472b90918100837040208d883b113aad717129f0558d1a9dcb9d1b5436b0b93b8e809dc7263d1849983ad666a679312be97bda41c704e33c994ed9f09eedfbf41e1736a806cae7ed7a37e7eb33467ac62b0eb511a9b8bab0208f23facf30e23826a151a93eebf09fbca7e16ff7cc19e87b2b57d71f652e571e9fd1e77b5749ece7ed63c3e7d7fb3d73fc28ed20c4d2fd8ebb5ea50caf4893ad4a4a74bdf7286ded966fb0d8c0d4d6a1160e7c1d4866b21b798b1f79f33f0ae20f87ac95e9fc54daf6d832916643e4ca48f79f48709c6d2c552a388a2d7a654b20e848cb623915f12dbd65da8afa2595c331d53ea44daf403d81d832b58732a6e2fe5700fb4cf710e0ac850618f8dea567a99cb142183bdb7f01cec8011d4e865de331395975d14354a87a2283a7b923fb4ce3e29af456de2a9ab0fba8ab773f32abeac266693e4ba327179460311c6710b990e1d45456cac3bcb85eba1b66dc5ac75bef22e038bd3033e315856048a62a2f818fd91440ba06620d87c5e726f15a81b115d86c6a903f02ad33f54328f8addead0a43954156a792a06b0f52df94e6fb66ac71f059fd8ecbd3a9d4a4db4de3f726d4e2756c1aa21f8a8b546775b2ad319892aa7ff309636e4b3507b3e30f84c51a954b96a559bbc248b670cecb96f96d722da5ed3355e81aa3b95f8aa9ee97d5f427d85dbd14cb5edcf1326ad3c1aeb4d329affccd60510f9000311e6b2fd358e7172918b5b4c2a925121523700f500c7809c411c558d9cd04185962de1ac403754902f1aa150917227716c748ed1a761680c4444561a8eb03155420cc761010889da6bce5256e3bf757e7206271ef50d8b58741a45922e48d2a712a57cb9b5fa4cf716c517a854ecbb0fd645b4165f3d62c9072c856804ce5cec7e7d62bc891344309dead563ad3a6ae32f27a8109b1eaa34d3993e52c296207ec22ad35eeff00742a00140b5bc46e0697d23fd9f5070b486f7405fcd9c6673ee589f78b8561ef86149feeb536f3b5d1bea0cb5b3bb557d11c01418547a5884d03037bf465dbe614fb4b5b73949d9b1fbb0874cb75f434dca7e92ee4596a1ac50ba37a48bc14de99ff00d4a80ff7193c8be92a783d4cb52b523be65a83d19729fad327de005b011451440057f85bd0fe53294f143f68ca45890c9d7e039949f6669acaa3c27d0fe531d85c21fdb2b542465c94b20e60b660c7fc83e66490335587aa18043a92a4907504039759578de17dd78e992698f8a99d728fbc877b7f2fcba4587c4e5ac39e6eee98f2fe35463f2eefe72f642714d61928cdc5e5190e21835ac994efbab7436fa894346b3e621f4753627adb4bfafe7a1e73578ba1ddd429f64f8a9fa5f55f627e444a2e3587b377837ca49f30a466ff0029bfe098d662fa59b2589454d16987af9903796bedbca6ed4f09388a42a22fef505d47de0756a7ebd3cc47f0f56d46a8e8ac47ba912cf0cf7453e42284e554d4e3ca639c23741c25c34793832fbb29daa7c2545a350df095588a80fd82da1653c87323d64fed57678ddabd11beb5500d6fcdd7f51ef31d5d33291ee27a9aedaf575657cbc99e56ea27a5b70fe7e68fa59b1e95569a023f7a54161620d35f1b588e440cbf8e0f11e21ddae2311b95b50a23abf3b7e36d7ca9f94f9f7b23dafad807b106a513f15226d6f3a64fc27cb63f59bac576ad71613f672453425d95b43debdf3661e409d79e6339f7755516d9a74f156cd2f9967492c00bdedccf33cc9f590302b9aab55eaa32fa31d3fca887f199171dc77bba6ccc00b03adf9f2d257ffda01429172a0dec72aea40b054075d2c028bce4c2b974bf37b7dceed9647ae3e4b7fe17f3f2371c22aad1188c6b90170d4cad3cc6c3be70093ec0a0fc6d32bc1f889c4daabb6676a8e5dad6b926e0db978728b794cbf1bed436270c986a68ca81bbdacec45ea54b96b051b28247f6893fb02d76a8be68e3f12b03fe9facebc74ceba164e06a350adb5b3d082c233a8239699b050348358769d0358568f000800e845e101d214a8e23c7157c29e26fca0d604d968ae36b8bf499eed062c96eef90d4cae35d89cd7378189aa5db336e05a43241cb28e406683de03e501ab08b04478b758351ad1533a6b396f7bc40346b5b7d64aa4ca402252e32bd9ba8e623d4b8ad302d97e526e0f1b12e9783d138754eeeb3d03b0ca69ff41161f2208f712e256719c39f0d64176a7a903765e607d0fa812c69540c030e62f133be53537ee712ea7e1a873af9120675f98cdeedd25dca6e3d872db68d60c87a3a9d3db91f2264ce0f8c15692b796a3a7507cc1b8f68d813651f151dde229d41a0a81a993fcc3c69f40ff39792071cc31a94582fc4b674fea42187e5689013693e600f510a41e0f890e808d880c3d1b593a00299ba82d8971d69aff95dff00fd4d24c176cea6203a1c3803bd6141dfed530ee2ce06dd45f95c47159626f0b25c70da79ebb5404e44d013b66f08723cbc0abeb9a6941beb2a38661400a8a2c8a00f96d7eb2de2632b78eaf811b9871f26054fe7f49438f407bb0762e54fa3537065bf1caf764a7c87ef1cfcd507bf88fe194b8ec42dd0dc1cb5016b72011cfe931ddefec6ca3dcdfcca2a35c8a4179b8453ec466fa032ef8454ba95e86e3d0cce600e70adc957e6e4788fb5c8f7334dc3b0f914b3684fd0456e120a5b6f24d993ed0f65af7ab871e2d4bd2d837529d0f96c7ca68a9e2f3b655d40d58fe824a8a9baca25d507864eea2bbe1d3359478ed4a61ae08218684116607a10668fb37830686ab7caec0b0b83ad88b91e444beed576769d746aa3c1555490e3ed585ece39edbef1be134db0b4c52b02777247c4c773e93a7a8d746fa5616259395a7d04a8b9e5e6382bf1d4e92e4ce342d6ea744736bfb42c7e03fe09cb0ca022d85ad7375b691e52d5f1232d35cb46cc74d0b9d86ba0b5879e87ac67b635ab31a787bdcbf8caa0b9363651e97b9f6128ab329c21f1cbf4e7e88badc461659f0c2f5e3eacc9b6834f69a8ec00fde5423a531ffc92a386706a95712b42a2328043d4be9fbb006c475240f79bae0548673650a3331006832e6755fa289d5d56aa12ff005c77cae4e2c34d28c3da4b6df1834e823968d536d6d1e130e04011ac20272dac2063132363efddb5b7b4c585137b317c6d01ac72f8473e9790b1789190c91399a700d245ab8c00da54964ac3aab730568ac8d89abb107e5029e2c11beb2ce978258659580da36d580d8c8d9b4de015d62510c1171ea49bc876f296f68df763a4b94b04d48f563882b5323dacff00c26f3b6a87cf4247517e91f44b5edb6f6f38a2941dd446e234eea0f4fc8ca8e155052acc87457bd45f7b671fdd66fc71451a0345145148819fc31ee2b352e4097a5e68c7c4becc7e4564dab8d63b683cb7f9c51490d11cb1ea643c79be44e6cebf2439d8fc96dee228a340cb8c1626d65200e87cfce4ac56205342eda002e628a4419e7f5b1af50b331f8db311d3928f616facade2154d8d35dd94807a17fdd83ec1aa1fc3145332dde4bdecb04ec21a74802df0a8d075f58389c654add513e44fa0e5ea67628b1e23cbf74b8e13432a7afe5ca4d8a299a4f73645610d6296e8e3aab0f983394006442403e1522fe6045143c05e255f02d6ae24ff00ccb5bd1aa0dbfdded2ca9d31debb5b5ca8b7e76f11b7d628a5b77bcfd17d11551ee2f57f5642c6f82abd426c02516feda8d9fe997e51fece0f15cf2503e4f54fe444514d3a5dd3399da6f74bd4d1298e08a29ace39c275849145240c6f159b2b65deda4c2e29cadf3837079c5148d8b8212210c6726d0190f155403a4514518a04b7029e2411e2108531f66762927b127b09988d8416c500228a24b209646c630f38ead5beb3b1493439248fffd9);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `student_name` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `student_name`, `student_id`, `teacher_id`, `status`) VALUES
(21, 'Sid', 7, 4, 'Accepted'),
(29, 'Sid', 7, 5, 'Pending'),
(34, 'Sid', 7, 6, 'Pending'),
(46, 'Sid', 7, 8, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_classes`
--

CREATE TABLE `schedule_classes` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `date` text NOT NULL,
  `stiming` text NOT NULL,
  `etiming` text NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` text NOT NULL,
  `no_of_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_classes`
--

INSERT INTO `schedule_classes` (`id`, `subject`, `date`, `stiming`, `etiming`, `teacher_id`, `teacher_name`, `no_of_students`) VALUES
(1, 'Mathematics', '2023-10-05', '19:00', '20:30', 4, 'Amit Tyagi', 20),
(2, 'PHP', '2023-10-05', '17:00', '17:30', 4, 'Amit Tyagi', 20),
(3, 'Physics', '2023-10-04', '18:00', '20:00', 4, 'Amit Tyagi', 20),
(4, 'Chemistry', '2023-10-03', '18:50', '19:50', 4, 'Amit Tyagi', 20),
(5, 'Geography', '2023-10-04', '15:30', '17:00', 4, 'Amit Tyagi', 20),
(7, 'DSA', '2023-10-14', '09:00', '10:00', 4, 'Amit Tyagi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `user_id`, `subject`, `price`) VALUES
(2, 4, 'maths', 250),
(3, 4, 'physics', 250);

-- --------------------------------------------------------

--
-- Table structure for table `tuition_details`
--

CREATE TABLE `tuition_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `year_experience` text NOT NULL,
  `month_experience` int(11) NOT NULL,
  `mode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuition_details`
--

INSERT INTO `tuition_details` (`id`, `user_id`, `year_experience`, `month_experience`, `mode`) VALUES
(2, 4, '10', 6, 'any');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userType` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `userType`, `password`) VALUES
(4, 'Amit Tyagi', 9876543210, 'amit.tyagi@gmail.com', 'tutor', 'L@GNbBuv'),
(5, 'Atul Kumar', 7418529630, 'atulkumar@gmail.com', 'tutor', 'D<Z_KTic'),
(6, 'Kaushal Kumar', 8529637410, 'kaushal.kumar@gmail.com', 'tutor', 'aa)jjIZO'),
(7, 'Sid', 9987654321, 'sid@gmail.com', 'student', '=!PC*lhs'),
(8, 'Ram Charan', 963852741, 'ram@gmail.com', 'tutor', 'Q$05!TaV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_qualification`
--
ALTER TABLE `educational_qualification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `other_details`
--
ALTER TABLE `other_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `schedule_classes`
--
ALTER TABLE `schedule_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuition_details`
--
ALTER TABLE `tuition_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `educational_qualification`
--
ALTER TABLE `educational_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `other_details`
--
ALTER TABLE `other_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `schedule_classes`
--
ALTER TABLE `schedule_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tuition_details`
--
ALTER TABLE `tuition_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;