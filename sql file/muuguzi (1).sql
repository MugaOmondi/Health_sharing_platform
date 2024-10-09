-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 10:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muuguzi`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `heading` varchar(201) NOT NULL,
  `category` text NOT NULL,
  `description` varchar(901) NOT NULL,
  `keywords` text NOT NULL,
  `post_body` varchar(2001) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `heading`, `category`, `description`, `keywords`, `post_body`, `photo`, `user_id`) VALUES
(2, 'Mental Health', 'mental health issues include anxiety, depression, and stress-related disorders.', 'Mental health is a crucial aspect of overall well-being, influencing how individuals think, feel, and act. It encompasses emotional, psychological, and social factors, affecting how we handle stress, relate to others, and make choices. Prioritizing mental health involves self-care practices such as regular exercise, adequate sleep, and healthy nutrition. Building strong social connections and seeking support when needed can greatly enhance mental resilience. It\'s essential to recognize the signs of mental health issues and seek professional help if necessary. Open conversations about mental health can reduce stigma and encourage individuals to take proactive steps toward emotional wellness.', 'Mental Health', 'Mental health is a vital component of overall well-being, impacting how individuals think, feel, and act. It influences daily functioning, relationships, and the ability to cope with life’s challenges. Recognizing the importance of mental health is essential in fostering a supportive environment for oneself and others.\r\n\r\nCommon mental health issues include anxiety, depression, and stress-related disorders. These conditions can arise from various factors, including genetics, trauma, and lifestyle choices. It is crucial to address these issues early through open conversations, reducing stigma, and encouraging those affected to seek help.\r\n\r\nPracticing self-care is a fundamental aspect of maintaining mental health. This includes regular exercise, a balanced diet, sufficient sleep, and engaging in activities that bring joy. Mindfulness techniques, such as meditation and deep breathing, can help manage stress and improve emotional regulation.\r\n\r\nSupport from family and friends is invaluable in promoting mental well-being. Building strong social connections and seeking professional help when needed can lead to better outcomes. In conclusion, prioritizing mental health is essential for leading a fulfilling life, and taking proactive steps can significantly enhance one’s quality of life and resilience.', 'R (1).jpg', 1),
(4, 'Nutrition and Diet', 'A Guide to Balanced Living', 'Nutrition and diet play vital roles in maintaining health and preventing disease. A balanced diet includes a variety of foods, ensuring adequate intake of essential nutrients like vitamins, minerals, proteins, carbohydrates, and healthy fats. It\'s important to consume whole foods such as fruits, vegetables, whole grains, and lean proteins while minimizing processed foods high in sugar, salt, and unhealthy fats. Portion control and mindful eating can aid in weight management and overall well-being. Staying hydrated is also crucial for optimal bodily functions. Educating oneself about nutritional needs and making informed food choices can lead to improved health.', 'Malnutrition, Balanced Diet', 'This article discusses essential aspects of health and nutrition, focusing on maintaining a balanced diet and a healthy lifestyle. Good nutrition is fundamental to overall health, influencing energy levels and immune function. Here’s a quick guide to understanding nutrition and implementing healthy eating habits.\r\n\r\nFirst, a balanced diet includes a variety of foods that provide essential nutrients: carbohydrates, proteins, fats, vitamins, and minerals. Aim to consume whole foods—fruits, vegetables, whole grains, lean meats, and healthy fats—while minimizing processed foods high in sugars and unhealthy fats.\r\n\r\nMeal planning can effectively maintain a nutritious diet by ensuring the right ingredients are on hand and reducing impulsive food choices. It also helps control portion sizes and minimize waste.\r\n\r\nHydration is crucial, as drinking adequate water supports digestion and overall bodily functions. Opt for water or herbal teas over sugary drinks.\r\n\r\nUnderstanding nutritional labels empowers individuals to make informed choices by identifying the nutritional content of products and choosing healthier options.\r\n\r\nFinally, combining good nutrition with physical activity enhances physical and mental well-being. Engaging in regular exercise complements a balanced diet, promoting a healthier lifestyle.\r\n\r\nIn conclusion, prioritizing health and nutrition involves making informed dietary choices and maintaining an active lifestyle. By following these guidelines, individuals can achieve better health outcomes and improve their quality of life.', 'R (2).jpg', 3),
(5, 'Respiratory Health', 'Allergies and Asthma ', 'Respiratory health is essential for overall well-being, as it involves the proper functioning of the lungs and airways. Maintaining good respiratory health requires avoiding smoking and exposure to pollutants, which can lead to chronic conditions. Regular exercise can strengthen respiratory muscles and improve lung capacity. Practicing deep breathing exercises helps increase oxygen intake and promotes relaxation. Staying hydrated is important for keeping mucus membranes moist, facilitating better airflow. Awareness of allergies and asthma triggers is crucial for preventing respiratory issues. Additionally, regular check-ups with healthcare providers can help monitor lung health.', 'Coughs, Congested chest', 'Respiratory health is crucial for overall well-being, as it involves the proper functioning of the lungs and airways. Maintaining good respiratory health requires avoiding smoking and exposure to environmental pollutants that can lead to chronic conditions. Regular physical activity is beneficial, as it strengthens respiratory muscles and improves lung capacity. Engaging in exercises such as walking, running, or swimming can enhance lung function.\r\n\r\nStaying hydrated is essential for respiratory health, as it keeps mucus membranes moist and facilitates better airflow. Moreover, practicing deep breathing exercises can increase oxygen intake and promote relaxation, which is especially beneficial for individuals with respiratory issues.\r\n\r\nIt’s important to be aware of allergens and irritants that may trigger respiratory problems, such as pollen, dust, and pet dander. Using air purifiers and maintaining a clean living environment can help mitigate these risks. Regular check-ups with healthcare providers are vital for monitoring lung health and catching potential problems early.\r\n\r\nAdditionally, vaccinations, such as the flu shot and pneumonia vaccine, can help prevent respiratory infections. In conclusion, prioritizing respiratory health through lifestyle choices, awareness, and preventive measures can lead to improved lung function and overall quality of life.', 'OIP.jpg', 1),
(17, 'Hygiene and Cleanliness', 'A Guide to Balanced Living', 'Ensuring health hygiene and cleanliness is essential for preventing illness and promoting overall well-being. Regular handwashing, maintaining a clean living environment, and proper food handling are critical practices. It\'s important to use clean water and soap, especially before eating and after using the restroom. Disinfecting surfaces frequently helps reduce the spread of germs. Additionally, keeping personal items organized and practicing good waste disposal contribute to a healthier space. Educating oneself and others about hygiene habits can significantly impact public health. Always remember, a clean environment fosters a healthy mind and body.', 'Hygiene, Diet, Fitness', 'Hygiene and cleanliness are fundamental to maintaining good health and preventing disease. Proper hygiene practices, such as regular handwashing, can significantly reduce the spread of germs and infections. It is essential to wash hands with soap and water for at least 20 seconds, especially before eating and after using the restroom. Keeping personal items, like towels and toothbrushes, clean is also crucial.\r\n\r\nA clean living environment contributes to physical and mental well-being. Regularly cleaning and disinfecting surfaces, particularly in high-touch areas, helps eliminate harmful bacteria and viruses. Decluttering spaces and organizing belongings can improve air quality and reduce stress.\r\n\r\nIn the kitchen, practicing good hygiene during food preparation is vital. This includes washing fruits and vegetables, using separate cutting boards for raw meat, and storing food at safe temperatures. Personal hygiene habits, such as bathing regularly and maintaining oral health, also play a significant role in overall cleanliness.\r\n\r\nEducating communities about the importance of hygiene can foster healthier practices and reduce the incidence of illness. In conclusion, prioritizing hygiene and cleanliness is essential for personal health and public safety, contributing to a healthier, more vibrant society. Simple daily habits can lead to lasting improvements in overall well-being.', 'R.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `suggestion` varchar(601) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `suggestion`, `users_id`) VALUES
(5, 'Maintaining muscle health is essential for fitness. Regular strength training builds muscle mass, while a balanced diet rich in protein supports repair and growth. Adequate rest aids recovery, and hydration prevents cramps. Flexibility exercises enhance performance and reduce injury risk. Prioritizing muscle health improves physical performance and quality of life.', 1),
(6, 'Managing migraines involves avoiding triggers like stress and poor sleep. Regular exercise, hydration, and a balanced diet can reduce attack frequency. Pain relievers or prescribed medications help manage symptoms. Relaxation techniques like meditation can ease discomfort. Consulting a healthcare provider ensures effective treatment.', 1),
(21, 'Managing depression involves seeking support from friends, family, or professionals. Regular exercise, healthy eating, and proper sleep can improve mood. Therapy and medication are effective treatments for many people. Mindfulness and relaxation techniques also help reduce symptoms. Professional guidance is key to a tailored approach.', 3),
(22, 'Disease monitoring involves tracking symptoms and health changes to detect issues early. Regular check-ups and screenings help identify potential risks. Data from monitoring guides treatment and prevention strategies. Technology like health apps can simplify tracking. Early intervention leads to better health outcomes.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tipset`
--

CREATE TABLE `tipset` (
  `id` int(11) NOT NULL,
  `keywords` varchar(201) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(301) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipset`
--

INSERT INTO `tipset` (`id`, `keywords`, `title`, `category`, `users_id`) VALUES
(1, 'eeeeee', 'Learner', 'eeeee', 1),
(2, 'Health', 'Pharmacist', 'Nutrition', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email_address` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `title` text NOT NULL,
  `fullname` text NOT NULL,
  `photo` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email_address`, `password`, `title`, `fullname`, `photo`) VALUES
(1, 'EdgarMuga', 'edgarmuga46@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Learner', 'Edgar Omondi Muga', 'IMG-20240903-WA0016.jpg'),
(3, 'FatumaZarika', 'zarikafatuma@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Medical_Professional', 'Zarika Fatuma', 'OIP (1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipset`
--
ALTER TABLE `tipset`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tipset`
--
ALTER TABLE `tipset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
