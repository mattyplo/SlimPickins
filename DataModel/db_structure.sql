CREATE TABLE `Foods` (
  `FoodID` int(11) NOT NULL,
  `FoodName` varchar(255) NOT NULL,
  `GramsPerServing` decimal(10,2) NOT NULL,
  `CaloriesPerGram` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Meals`
--

CREATE TABLE `Meals` (
  `MealID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `MealTypeID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `MealsFoods`
--

CREATE TABLE `MealsFoods` (
  `MealsFoodsID` int(11) NOT NULL,
  `MealID` int(11) NOT NULL,
  `FoodID` int(11) NOT NULL,
  `GramsConsumed` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `MealTypes`
--

CREATE TABLE `MealTypes` (
  `MealTypeID` int(11) NOT NULL,
  `MealName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Foods`
--
ALTER TABLE `Foods`
  ADD PRIMARY KEY (`FoodID`);

--
-- Indexes for table `Meals`
--
ALTER TABLE `Meals`
  ADD PRIMARY KEY (`MealID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `meals_ibfk_1` (`MealTypeID`);

--
-- Indexes for table `MealsFoods`
--
ALTER TABLE `MealsFoods`
  ADD PRIMARY KEY (`MealsFoodsID`),
  ADD KEY `MealID` (`MealID`),
  ADD KEY `FoodID` (`FoodID`);

--
-- Indexes for table `MealTypes`
--
ALTER TABLE `MealTypes`
  ADD PRIMARY KEY (`MealTypeID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Foods`
--
ALTER TABLE `Foods`
  MODIFY `FoodID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Meals`
--
ALTER TABLE `Meals`
  MODIFY `MealID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `MealsFoods`
--
ALTER TABLE `MealsFoods`
  MODIFY `MealsFoodsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `MealTypes`
--
ALTER TABLE `MealTypes`
  MODIFY `MealTypeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Meals`
--
ALTER TABLE `Meals`
  ADD CONSTRAINT `meals_ibfk_1` FOREIGN KEY (`MealTypeID`) REFERENCES `MealTypes` (`MealTypeID`);

--
-- Constraints for table `MealsFoods`
--
ALTER TABLE `MealsFoods`
  ADD CONSTRAINT `mealsfoods_ibfk_1` FOREIGN KEY (`MealID`) REFERENCES `Meals` (`MealID`),
  ADD CONSTRAINT `mealsfoods_ibfk_2` FOREIGN KEY (`FoodID`) REFERENCES `Foods` (`FoodID`);
