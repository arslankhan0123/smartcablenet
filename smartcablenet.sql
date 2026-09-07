-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2026 at 06:11 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcablenet`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@gmail.com|185.213.83.157', 'i:1;', 1777799748),
('admin@gmail.com|185.213.83.157:timer', 'i:1777799748;', 1777799748),
('admin@gmail.com|185.213.83.234', 'i:1;', 1778279815),
('admin@gmail.com|185.213.83.234:timer', 'i:1778279815;', 1778279815),
('arslan.devsspace@gmail.com|127.0.0.1', 'i:2;', 1788801850),
('arslan.devsspace@gmail.com|127.0.0.1:timer', 'i:1788801850;', 1788801850);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `email` longtext COLLATE utf8mb4_unicode_ci,
  `phone` longtext COLLATE utf8mb4_unicode_ci,
  `subject` longtext COLLATE utf8mb4_unicode_ci,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_14_213307_create_contacts_table', 1),
(5, '2025_06_16_143356_create_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `title`, `image`, `short_description`, `long_description`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'TV Services', NULL, '<p>Professional TV installation, repair, and setup services at your doorstep.</p>', '<h3><strong>A. Installation Services</strong></h3><ul data-spread=\"false\"><li><strong>Professional TV Wall Mounting:</strong> We provide professional wall mounting services for LED, LCD, Smart TVs, and Plasma TVs.</li><li><strong>Safety-Focused Installation:</strong> Every installation is completed according to proper safety standards to protect your TV and property.</li><li><strong>Customized Mounting Solutions:</strong> Since every wall is different, we use suitable brackets and fittings based on your space and TV requirements.</li></ul><h3><strong>B. Repair &amp; Maintenance</strong></h3><ul data-spread=\"false\"><li><strong>Screen Problem Solutions:</strong> We diagnose and repair issues such as screen lines, black screens, blank displays, and other display problems.</li><li><strong>Audio &amp; Sound Repairs:</strong> We resolve speaker failures, distorted audio, and other sound-related issues.</li><li><strong>Hardware &amp; Software Support:</strong> Our services include remote sensor repairs, power-related issues, motherboard faults, and software updates.</li></ul><h3><strong>C. Tuning &amp; Setup</strong></h3><ul data-spread=\"false\"><li><strong>Channel Configuration:</strong> We properly tune and configure your TV channels for better signal quality and viewing clarity.</li><li><strong>Smart TV App Setup:</strong> We install and configure popular streaming apps such as Netflix, YouTube, and Amazon Prime.</li><li><strong>Network Connectivity:</strong> Get assistance with setting up Wi-Fi and LAN connections for your Smart TV.</li></ul><h3><strong>D. Why Choose Us?</strong></h3><ul data-spread=\"false\"><li><strong>Certified Technicians:</strong> Our skilled technicians are professionally trained and experienced.</li><li><strong>Same-Day Service:</strong> We offer fast service to minimize downtime and get your TV working again quickly.</li><li><strong>Affordable Pricing:</strong> Our services are competitively priced with no hidden charges.</li><li><strong>24/7 Customer Support:</strong> Our support team is available around the clock whenever you need assistance.</li></ul>', '$499.00', 1, '2025-07-30 05:34:42', '2026-09-07 12:31:47'),
(2, NULL, 'Internet Service', NULL, '<p>High-speed and reliable internet services for homes and businesses.</p>', '<h3><strong>A. Internet Connection Options</strong></h3><ul data-spread=\"false\"><li><strong>Fiber-Optic Internet:</strong> Experience ultra-fast speeds and reliable performance for demanding online activities.</li><li><strong>Broadband/DSL:</strong> Affordable and dependable internet connectivity for everyday home use.</li><li><strong>Wireless Internet:</strong> Flexible 4G/5G and Wi-Fi solutions suitable for mobile and rural locations.</li></ul><h3><strong>B. Installation &amp; Setup</strong></h3><ul data-spread=\"false\"><li><strong>Same-Day Installation:</strong> Professional setup of modems, routers, and network wiring.</li><li><strong>Network Configuration:</strong> Configure your Wi-Fi, secure your network, and optimize signal strength.</li><li><strong>Device Connectivity:</strong> Assistance with connecting smart TVs, laptops, smartphones, and other devices.</li></ul><h3><strong>C. Maintenance &amp; Support</strong></h3><ul data-spread=\"false\"><li><strong>Technical Troubleshooting:</strong> Quickly resolve slow speeds, connection drops, and service interruptions.</li><li><strong>Upgrades &amp; Add-Ons:</strong> Upgrade your plan, replace equipment, or add mesh Wi-Fi solutions.</li><li><strong>24/7 Technical Support:</strong> Get assistance with internet-related issues whenever you need it.</li></ul><h3><strong>D. Why Choose Our Internet Service?</strong></h3><ul data-spread=\"false\"><li><strong>Fast Connectivity:</strong> Ideal for streaming, gaming, remote work, and everyday browsing.</li><li><strong>Reliable Performance:</strong> Stable service designed to minimize downtime.</li><li><strong>Flexible Packages:</strong> Choose plans based on your preferred speed and data requirements.</li><li><strong>Customer-Focused Service:</strong> Affordable plans backed by responsive customer support.</li></ul>', '$449.00', 1, '2025-07-30 05:35:59', '2026-09-07 12:31:09'),
(3, NULL, 'Home Phone Service', NULL, '<p>Reliable and affordable home phone services with clear voice quality.</p>', '<h3><strong>A. Service Options</strong></h3><ul data-spread=\"false\"><li><strong>Traditional Landline:</strong> Enjoy dependable and clear voice connections.</li><li><strong>VoIP Home Phone:</strong> Internet-based calling with modern features and flexibility.</li><li><strong>Unlimited Calling Plans:</strong> Cost-effective packages for local and long-distance calls.</li></ul><h3><strong>B. Installation &amp; Setup</strong></h3><ul data-spread=\"false\"><li><strong>Quick Installation:</strong> Professional wiring and equipment setup by trained technicians.</li><li><strong>Home Network Integration:</strong> Seamless connection with your existing internet or cable network.</li><li><strong>Multiple Handsets:</strong> Easily connect multiple phones throughout your home.</li></ul><h3><strong>C. Features &amp; Benefits</strong></h3><ul data-spread=\"false\"><li><strong>Voicemail:</strong> Convenient access to messages when you miss a call.</li><li><strong>Caller ID &amp; Call Waiting:</strong> Know who is calling and manage incoming calls efficiently.</li><li><strong>International Calling:</strong> Affordable rates for calls to international destinations.</li><li><strong>Emergency 911 Support:</strong> Access to reliable emergency calling services.</li></ul><h3><strong>D. Why Choose Our Home Phone Service?</strong></h3><ul data-spread=\"false\"><li><strong>Crystal-Clear Calls:</strong> Reliable voice quality with minimal interruptions.</li><li><strong>Affordable Packages:</strong> Flexible plans designed for different household needs.</li><li><strong>24/7 Customer Support:</strong> Get assistance whenever you need it.</li><li><strong>Bundle Savings:</strong> Save more by combining your phone service with Internet and TV packages.</li></ul>', '$399.00', 1, '2025-07-30 05:48:45', '2026-09-07 12:30:38'),
(4, NULL, 'Mobile Plans', NULL, '<p>Affordable mobile plans with nationwide coverage and unlimited options.</p>', '<h3><strong>A. Plan Options</strong></h3><ul data-spread=\"false\"><li><strong>Prepaid Plans:</strong> Flexible pay-as-you-go packages with no long-term commitment.</li><li><strong>Postpaid Plans:</strong> Convenient monthly billing with additional benefits and features.</li><li><strong>Unlimited Data Plans:</strong> Ideal for customers who use large amounts of mobile data.</li><li><strong>Family &amp; Group Plans:</strong> Share data, calls, and texts across multiple lines.</li></ul><h3><strong>B. Included Features</strong></h3><ul data-spread=\"false\"><li><strong>Unlimited Calls &amp; Texts:</strong> Stay connected with generous or unlimited calling and messaging.</li><li><strong>High-Speed Data:</strong> Enjoy reliable 4G/5G connectivity with fast browsing speeds.</li><li><strong>International Roaming:</strong> Stay connected while traveling with affordable roaming options.</li><li><strong>Mobile Hotspot:</strong> Share your mobile data with laptops, tablets, and other devices.</li></ul><h3><strong>C. Device Options</strong></h3><ul data-spread=\"false\"><li><strong>Bring Your Own Device (BYOD):</strong> Keep using your existing compatible smartphone with our plans.</li><li><strong>Latest Smartphones:</strong> Choose from modern devices with convenient monthly payment options.</li><li><strong>Device Protection:</strong> Protect your phone against accidental damage, loss, or theft with available coverage.</li></ul><h3><strong>D. Why Choose Our Mobile Plans?</strong></h3><ul data-spread=\"false\"><li><strong>Nationwide Coverage:</strong> Reliable mobile connectivity across urban and rural locations.</li><li><strong>Affordable Pricing:</strong> Flexible packages designed to fit different budgets.</li><li><strong>Flexible Contracts:</strong> Simple plans without hidden charges or unnecessary long-term commitments.</li><li><strong>24/7 Customer Support:</strong> Get assistance whenever you need help with your mobile service.</li></ul>', '$249.00', 1, '2025-07-30 05:50:34', '2026-09-07 12:30:06'),
(5, NULL, 'Cable Setup & Support', NULL, '<p>Expert cable setup and reliable support to keep your entertainment running smoothly.</p>', '<h3><strong>A. Installation &amp; Setup</strong></h3><ul data-spread=\"false\"><li><strong>Set-Top Box Installation:</strong> Professional installation of cable boxes for HD and 4K entertainment.</li><li><strong>Wiring &amp; Connections:</strong> Neat and secure cable wiring to ensure reliable connections.</li><li><strong>Channel Configuration:</strong> Setup and configuration of available channels and subscription packages.</li><li><strong>Multi-Room Installation:</strong> Connect multiple TVs throughout your home using a single service connection.</li></ul><h3><strong>B. Troubleshooting &amp; Support</strong></h3><ul data-spread=\"false\"><li><strong>Signal Problems:</strong> Resolve weak signals, poor picture quality, and channel interruptions.</li><li><strong>Set-Top Box Issues:</strong> Diagnose, repair, or replace faulty equipment when needed.</li><li><strong>Parental Controls:</strong> Help configure viewing restrictions for a safer family experience.</li><li><strong>Software Updates:</strong> Keep your devices updated for improved performance and stability.</li></ul><h3><strong>C. Service Upgrades</strong></h3><ul data-spread=\"false\"><li><strong>Channel Packages:</strong> Easily add or remove channels based on your preferences.</li><li><strong>Premium Channels:</strong> Set up HBO, sports networks, and other premium subscriptions.</li><li><strong>On-Demand Services:</strong> Get assistance with on-demand content and streaming features.</li></ul><h3><strong>D. Why Choose Our Cable Setup &amp; Support?</strong></h3><ul data-spread=\"false\"><li><strong>Qualified Technicians:</strong> Experienced professionals providing dependable installation and support.</li><li><strong>Fast Service:</strong> Quick installation and responsive technical assistance.</li><li><strong>Transparent Pricing:</strong> Competitive rates with clear pricing and no hidden charges.</li><li><strong>24/7 Support:</strong> Our team is available around the clock for your cable service needs.</li></ul>', '$299.00', 1, '2025-07-30 05:51:30', '2026-09-07 12:29:30'),
(6, NULL, 'Bill Payment Services', NULL, '<p>Fast and secure bill payment services for all your utilities.</p>', '<h3><strong>A. Bills You Can Pay</strong></h3><ul data-spread=\"false\"><li><strong>Electricity Bills:</strong> Conveniently pay bills from major electricity providers.</li><li><strong>Gas Bills:</strong> Make gas payments quickly without waiting in long queues.</li><li><strong>Water Bills:</strong> Settle your water bills easily and hassle-free.</li><li><strong>Telecom &amp; Internet Bills:</strong> Pay mobile, landline, and broadband service bills.</li><li><strong>Cable &amp; TV Subscriptions:</strong> Make quick payments for supported cable and TV providers.</li></ul><h3><strong>B. Available Payment Methods</strong></h3><ul data-spread=\"false\"><li><strong>Online Payments:</strong> Make secure payments using credit/debit cards, bank transfers, or digital wallets.</li><li><strong>Auto-Pay:</strong> Set up automatic payments for recurring bills and never miss a due date.</li><li><strong>In-Store Payments:</strong> Pay your bills conveniently at authorized payment locations.</li><li><strong>Multiple Currencies:</strong> Support for different currencies to accommodate international customers.</li></ul><h3><strong>C. Benefits of Our Bill Payment Service</strong></h3><ul data-spread=\"false\"><li><strong>24/7 Access:</strong> Pay your bills anytime and from anywhere.</li><li><strong>Instant Confirmation:</strong> Receive immediate payment confirmation and receipts.</li><li><strong>Avoid Late Fees:</strong> Make timely payments and reduce the risk of late-payment penalties.</li><li><strong>Secure Payments:</strong> Advanced security measures help keep your payment information protected.</li></ul><h3><strong>D. Why Choose Our Bill Payment Service?</strong></h3><ul data-spread=\"false\"><li><strong>All-in-One Solution:</strong> Manage and pay multiple types of bills from one place.</li><li><strong>Reliable Service:</strong> A dependable payment system designed for convenient transactions.</li><li><strong>Dedicated Support:</strong> Get assistance whenever you experience payment-related issues.</li><li><strong>Time-Saving Convenience:</strong> Avoid long queues and unnecessary trips by paying your bills easily.</li></ul>', 'Service Fee Starting From $2 per bill (if applicable)', 1, '2025-07-30 05:54:23', '2026-09-07 12:28:19'),
(7, NULL, 'Bundle Packages', NULL, '<p>Affordable bundle packages combining TV, Internet, Phone, and more.</p>', '<h3><strong>A. Bundle Options</strong></h3><ul data-spread=\"false\"><li><strong>TV + Internet:</strong> Ideal for entertainment along with fast and reliable browsing.</li><li><strong>Internet + Phone:</strong> Enjoy seamless online access and calling at a combined rate.</li><li><strong>Triple Play (TV + Internet + Phone):</strong> A complete package designed for convenience and maximum savings.</li><li><strong>Custom Bundles:</strong> Choose and combine services according to your specific needs.</li></ul><h3><strong>B. Bundle Benefits</strong></h3><ul data-spread=\"false\"><li><strong>Special Bundle Rates:</strong> Save up to 30% compared to purchasing services separately.</li><li><strong>One Convenient Bill:</strong> Manage all your services with a single monthly payment.</li><li><strong>Free Installation:</strong> No installation charges for customers choosing bundle packages.</li><li><strong>Priority Assistance:</strong> Bundle customers receive access to dedicated support.</li></ul><h3><strong>C. Optional Add-Ons</strong></h3><ul data-spread=\"false\"><li><strong>Mobile Plans:</strong> Add mobile services to your existing bundle for additional savings.</li><li><strong>Premium Channels:</strong> Enhance your TV package with HBO, sports, and other premium channels.</li><li><strong>Speed Upgrades:</strong> Upgrade your internet speed at special bundle rates.</li></ul><h3><strong>D. Why Choose Our Bundles?</strong></h3><ul data-spread=\"false\"><li><strong>Flexible Options:</strong> Select from various combinations designed for different household needs.</li><li><strong>Better Value:</strong> Enjoy greater savings while maintaining reliable service quality.</li><li><strong>All-in-One Service:</strong> Get your TV, Internet, and Phone services from one trusted provider.</li><li><strong>Simple Management:</strong> Easily monitor and manage all your services from one convenient dashboard.</li></ul>', 'Starting From $70/month', 1, '2025-07-30 06:00:14', '2026-09-07 12:27:44'),
(8, NULL, 'Customer Support', NULL, '<p>24/7 customer support to assist you with all your service needs.</p>', '<h3><strong>A. Customer Support Channels</strong></h3><ul data-spread=\"false\"><li><strong>Phone Support:</strong> Dedicated helpline for handling questions, concerns, and complaints.</li><li><strong>Email Support:</strong> Prompt assistance for service requests and customer issues.</li><li><strong>Live Chat:</strong> Real-time support through our website or mobile app.</li><li><strong>Social Media Support:</strong> Customer assistance through platforms such as Facebook, Twitter, WhatsApp, and more.</li></ul><h3><strong>B. Support Services We Provide</strong></h3><ul data-spread=\"false\"><li><strong>Billing &amp; Payments:</strong> Assistance with bills, invoices, payments, and plan upgrades.</li><li><strong>Technical Support:</strong> Troubleshooting for TV, Internet, and Phone-related problems.</li><li><strong>Installation Assistance:</strong> Step-by-step guidance for new services, connections, and equipment.</li><li><strong>Account Management:</strong> Support with password resets, account changes, and other account-related requests.</li></ul><h3><strong>C. Our Support Highlights</strong></h3><ul data-spread=\"false\"><li><strong>24/7 Support:</strong> Our team is available around the clock to assist you.</li><li><strong>Multi-Language Assistance:</strong> Receive support in the language you prefer.</li><li><strong>Priority Support:</strong> VIP customers receive faster and prioritized assistance.</li><li><strong>Customer Feedback:</strong> Your feedback helps us continuously improve our services.</li></ul><h3><strong>D. Why Choose Our Customer Support?</strong></h3><ul data-spread=\"false\"><li><strong>Experienced Professionals:</strong> Our knowledgeable and friendly team is ready to help.</li><li><strong>Fast Response:</strong> We aim to minimize waiting times and respond quickly to your requests.</li><li><strong>Complete Solutions:</strong> We manage your issue from initial contact through final resolution.</li><li><strong>Customer Satisfaction:</strong> We are committed to delivering a reliable and satisfying support experience.</li></ul>', 'Included Free with All Services', 1, '2025-07-30 06:01:39', '2026-09-07 12:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8tifmnPZNL1KHPGXHT6N3pVNVm78mLglV4WH5oPh', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRGY2NGhCTGFBQ29CZVNhUW1FeWg1UUdzRVUycVA3dkpNOU9nVTNpcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1788804594),
('HevEl4fssTi1PGtyxn5RRdwX1B2RbmkztMTOEsy4', NULL, '202.166.171.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUEdjMDVpQlN2Uzl6QWxuTGprTTNnUWY0U0RuNUl2b3NwaUFraUQ5byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vd2F2ZXN5bmMtbnktbGxjLmNvbS9zZXJ2aWNlL2RldGFpbHMvNSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1788798742),
('tBtuZsJffjIaAcawtmJD9HbkefGL4pU0Q47D8AVc', NULL, '58.65.220.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36 Edg/152.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnF4VTZGN1ZnbW5ncUVjT1hkM3UxOFlDZ3Jva3JMN0h5Qnhyd1BPaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd2F2ZXN5bmMtbnktbGxjLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1788798353),
('ts70rnI2xktHOy27NAe8Vge8QqmRFL0KmQS0Xg1x', NULL, '58.65.220.92', 'WhatsApp/2.23.20.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFZJeWhlZDFPWDBNSERRTjNtT0VicWd5dlcwa1U3Nzd0Ukg3ZmlsayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd2F2ZXN5bmMtbnktbGxjLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1788798367);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `real_password`, `role_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2025-07-30 05:28:47', '$2y$12$MEnYRCGahFIM1NPVSjxoau/GqnGX610mivZxdxJLJLdIed1HZay72', '12345678', 'Admin', NULL, '2025-07-30 05:28:47', '2025-07-30 05:28:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
