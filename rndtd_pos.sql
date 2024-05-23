-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: rndtd_posina
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countertitle1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countertitle2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countertitle3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countertitle4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,'About Us','Your Trusted Source for Quality Electrical Goods','<p>Parshvanath Industries is a Vapi, Gujarat (India) based renowned company to serve the market demands for electrical goods. The products the Manufacturer &amp; Supplier specializes in developing, finishing, testing, packaging and delivering are Push Button Station, Weatherproof Junction Box, Circle Cable Clip, Abs Junction Box, Abs-A.C. Box and PVC Grip.&nbsp;</p>','header-1716186394.png','image','20','Years of Expertise','01','No. of Production Units','40','Worldwide Clients','20+','Total of Products','<p>Parshvanath Industries is a Vapi, Gujarat (India) based renowned company to serve the market demands for electrical goods. The products the Manufacturer &amp; Supplier specializes in developing, finishing, testing, packaging and delivering are Push Button Station, Weatherproof Junction Box, Circle Cable Clip, Abs Junction Box, Abs-A.C. Box and PVC Grip.&nbsp;<br><br>The company provides these products to all households, commercial and industrial establishments. The expert team produces these products by making use of technological advanced machinery that assist them to execute the work with perfection. The products are often customized as per the clients\' requirements and specifications for their specific applications.</p>',NULL,'2024-05-20 01:07:09');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (2,'Push Button Station',NULL,NULL,'banner-1716266853.jpg','image','2024-05-15 23:24:34','2024-05-20 23:17:33'),(3,'Manufacturers And Suppliers',NULL,NULL,'banner-1716274618.jpg','image','2024-05-15 23:23:20','2024-05-21 01:26:58'),(29,'i',NULL,NULL,'banner-1716274626.jpg','i','2024-05-19 23:25:50','2024-05-21 01:27:06');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_canonical` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (4,'Bringing the Power Outside: Choosing the Right Weatherproof Junction Box','bringing_the_power_outside:_choosing_the_right_weatherproof_junction_box',NULL,'<p>The allure of outdoor living – string lights illuminating a patio, a bubbling fountain gracing the garden, or the convenience of strategically placed outlets – is undeniable. But venturing into the world of outdoor electrical installations requires careful consideration, particularly when it comes to protecting electrical connections from the elements. This is where the unsung hero, the weatherproof junction box, steps in.</p><p>Unlike its indoor counterpart, a weatherproof junction box isn\'t just a container for electrical connections. It\'s a crucial barrier, safeguarding those connections from the harsh realities of the outdoors – rain, snow, extreme temperatures, UV rays, and even dust and debris. Choosing the right weatherproof junction box is essential for ensuring the safety, longevity, and functionality of your outdoor electrical projects.</p><p>&nbsp;</p><h2>Unveiling the Essentials: Understanding Weatherproof Junction Boxes</h2><p>A weatherproof junction box shares the core functionality of its indoor counterpart – housing and protecting electrical connections. However, it boasts additional features specifically designed to withstand the outdoors. Here\'s a breakdown of the key components:</p><p>Enclosure: This is the main body of the box, typically made from a durable and weather-resistant material like ABS plastic with UV inhibitors or fiberglass-reinforced polyester.</p><p>Knockouts: Similar to standard junction boxes, weatherproof boxes have pre-molded openings (knockouts) for cable entry and exit. However, these knockouts may be equipped with additional features like gaskets or sealing rings to further prevent moisture ingress.</p><p>Cover: The cover secures the box and further protects the connections. Weatherproof covers typically have a tight-fitting design and may incorporate a gasket or seal for a weatherproof barrier. Some covers may be hinged for easy access, while others require separate mounting.</p><p>Mounting Options: Weatherproof junction boxes come with various mounting options, including surface mount (wall or post), flush mount (in concrete or masonry), and even underground burial options.<br><br>&nbsp;</p><h2>Weatherproofing Warriors: Key Features of a Weatherproof Junction Box</h2><p>What truly sets a weatherproof junction box apart are its specialized features designed to combat the elements:</p><p>IP Rating: The IP (Ingress Protection) rating is a critical factor. It indicates the level of protection against dust (first number) and moisture (second number). For outdoor applications, a minimum IP rating of 44 (dust-tight and protected against water splashes from any direction) is recommended. However, for harsher environments or direct water exposure, consider a higher rating like IP 65 (dust-tight and protected against water jets from any direction) or even IP 67 (dust-tight and protected against temporary immersion in water).</p><p>UV Resistance: Look for a box with a UV inhibitor added to the plastic material. This helps prevent the plastic from becoming brittle and cracking due to prolonged sun exposure.</p><p>Corrosion Resistance: The enclosure material should be resistant to corrosion, especially in coastal areas or environments with high humidity levels.</p><p>Grommets: These optional inserts around cable entry points provide an additional layer of protection against water ingress and ensure a tight fit for the cables.</p><p>Temperature Range: Ensure the chosen box\'s operating temperature range accommodates the expected temperature fluctuations in your location.<br><br>&nbsp;</p><h2>Matching the Need: Types of Weatherproof Junction Boxes</h2><p>The world of weatherproof junction boxes offers a variety to suit different applications:</p><p>Wall Mount Boxes: These boxes are ideal for surface mounting on walls, fences, or posts. They are commonly used for outdoor lighting fixtures, outlets for power tools, or pool equipment connections.</p><p>Post Mount Boxes: Designed for secure attachment to poles or posts, these boxes are often used for outdoor lighting controls, security cameras, or landscape lighting connections.</p><p>Underground Boxes: Made from robust materials with enhanced waterproofing measures, these boxes are suitable for burying underground to house connections for outdoor lighting, sprinkler systems, or invisible dog fences.</p><p>Deck Boxes: These specialized boxes offer a discrete solution for integrating outlets and switches into your deck design. They typically have a flush-mounted profile and a weatherproof lid for easy access.<br><br>&nbsp;</p><h2>Choosing Wisely: Factors to Consider When Selecting a Weatherproof Junction Box</h2><p>Selecting the right weatherproof junction box requires careful consideration of several factors:</p><p>Location: Consider the specific location of the box and the environmental factors it will face. This will influence the necessary IP rating, temperature range, and even the mounting option.</p><p>Application: The purpose of the box dictates its size and features needed. A box for a single light fixture will have different requirements than one housing a complex sprinkler system controller.<br>&nbsp;</p><p>Number of Cables: Ensure the box has enough knockouts for the number of cables entering and exiting the box. Opt for a box with additional knockouts for future needs.</p><p>Cable Size (continued): This ensures a snug fit and prevents strain on the wires. Consider using strain reliefs for additional cable protection at the entry point.</p><p>Compliance: Make sure the junction box complies with relevant electrical safety standards for outdoor use. In the United States, consult the National Electrical Code (NEC) for specific requirements.</p><p>Ease of Use: Consider the accessibility of the box for future maintenance or troubleshooting. Choose a cover design that allows for easy access while maintaining a weatherproof seal.</p><p>Aesthetics: While functionality is paramount, some weatherproof junction boxes offer a more aesthetically pleasing design. Consider options with a paintable finish or a low-profile design to minimize visual impact.</p><p>&nbsp;</p><h2>Installation Essentials: Safe and Secure Placement</h2><p>While weatherproof junction boxes are designed to withstand the elements, proper installation is crucial for optimal performance and safety. Here are some key points to remember:</p><p>Always consult a qualified electrician: Electrical work, especially outdoors, should only be undertaken by a licensed electrician with expertise in outdoor electrical installations.</p><p>Follow local building codes: Ensure your installation adheres to all relevant local building codes and regulations for outdoor electrical work.</p><p>Choose the right location: Select a location that is easily accessible for future maintenance but minimizes exposure to direct sunlight or harsh weather elements whenever possible.</p><p>Prepare the mounting surface: Ensure the mounting surface is level, secure, and appropriate for the chosen box and its weight when filled with cables.</p><p>Utilize proper tools and materials: Use the recommended tools for cutting knockouts, stripping wires, and securely fastening the box. Utilize weatherproof sealants or gaskets as specified by the manufacturer.</p><p>Maintain proper clearances: Maintain adequate space around the box for proper ventilation and to prevent overheating of the connections.</p><p>Follow the manufacturer\'s instructions: Each box may have specific installation guidelines. Always refer to the manufacturer\'s instructions for proper installation procedures.</p><p>&nbsp;</p><h2>Beyond the Basics: Additional Tips for Weatherproof Junction Box Success</h2><p>Here are some additional tips to ensure the longevity and functionality of your weatherproof junction box:</p><p>Label the box: Clearly label the box with its purpose (e.g., \"Patio Lighting\") to facilitate future maintenance or troubleshooting.</p><p>Consider future needs: Choose a box with enough space and knockouts to accommodate potential future additions to your outdoor electrical system.</p><p>Inspect regularly: Periodically inspect the box and connections for any signs of damage, moisture ingress, or loose connections.</p><p>&nbsp;</p><h2>Conclusion</h2><p>By understanding the importance of weatherproof junction boxes, choosing the right one for your needs, and following proper installation practices, you can ensure the safety and reliability of your outdoor electrical projects. From illuminating your patio to powering your water features, weatherproof junction boxes act as the silent guardians, ensuring your outdoor spaces are not just functional but also safe havens for relaxation and enjoyment.</p><p>So, the next time you venture into the world of outdoor electrical installations, remember the unsung hero – the weatherproof junction box. With the right knowledge and choices, you can transform your outdoor space into a haven powered by safety and convenience.</p>','Admin','202405181133Bringing the Power Outside_ Choosing the Right Weatherproof Junction Box.jpg','Weatherproof Junction Box','Blog-1716032457.jpg','Weatherproof Junction Box',NULL,NULL,NULL,NULL,'2024-05-18 06:03:58','2024-05-18 06:10:57'),(5,'Protect Your Connections: ABS Junction Boxes Explained','protect_your_connections:_abs_junction_boxes_explained',NULL,'<p>In the hidden world behind our walls and ceilings lies a network of electrical connections that power our modern lives. These connections, vital for everything from lighting our homes to powering our electronics, need protection from the elements and potential damage. This is where the humble ABS junction box steps in, acting as a silent guardian for our electrical infrastructure.</p><p>But what exactly is an ABS junction box, and why is it essential for electrical safety? This blog delves into the world of ABS junction boxes, explaining their purpose, benefits, different types, and crucial factors to consider when choosing one.</p><p>&nbsp;</p><h2>The Unsung Hero: What is an ABS Junction Box?</h2><p>An ABS junction box is a container, typically made fromAcrylonitrile Butadiene Styrene (ABS) plastic, used to house and protect electrical connections within a wiring system. These boxes come in various shapes and sizes, strategically placed throughout a building to house wire splices, switches, outlets, and other electrical components.</p><p>Here\'s a breakdown of the key components of an ABS junction box:</p><p>Body: This is the main enclosure, typically made from flame-retardant ABS plastic. It provides a physical barrier, protecting the connections from dust, moisture, and accidental contact.</p><p>Knockouts: These are pre-molded openings in the box body that allow for the entry and exit of electrical conduits and cables. Knockouts can be punched out to create customized openings for various wiring configurations.</p><p>Cover: The cover secures the box, further protecting the connections from dust, moisture, and tampering. Some covers may be hinged for easy access, while others require separate mounting.</p><p>Grommets: These optional inserts fit around the cable entry points, providing additional protection against abrasion and ensuring a tight fit.<br><br>&nbsp;</p><h2>Why Use ABS? Advantages of ABS Junction Boxes</h2><p>ABS plastic offers several advantages that make it a popular choice for junction boxes:</p><p>Durability: ABS is a strong and impact-resistant plastic, offering good protection against physical damage.</p><p>Lightweight: Compared to metal junction boxes, ABS is significantly lighter, making installation easier and reducing strain on walls and ceilings.</p><p>Corrosion Resistance: Unlike metal, ABS plastic is not susceptible to rust or corrosion, making it suitable for damp environments like basements or bathrooms (when used with appropriate weatherproof ratings).</p><p>Cost-Effective: ABS is a relatively inexpensive material, making ABS junction boxes a cost-effective solution for most residential and commercial electrical projects.</p><p>Non-Conductive: ABS is a non-conductive material, providing an additional layer of safety by preventing accidental electrical shock.</p><p>Flame Retardant: Most ABS junction boxes are manufactured with flame-retardant properties, helping to prevent the spread of fire in the event of an electrical malfunction.<br><br>&nbsp;</p><h2>A Box for Every Need: Types of ABS Junction Boxes</h2><p>While ABS offers a common material choice, junction boxes come in various types to suit different applications:</p><p>Wall Mount Boxes: These boxes are designed for surface mounting on walls using screws or other fasteners. They are ideal for situations where access to the connections may be needed periodically.</p><p>Ceiling Mount Boxes: Designed for mounting on ceilings, these boxes are often used for light fixtures, fans, and other overhead electrical components.</p><p>Floor Boxes: Installed flush with the floor, these boxes are used for connecting power and data cables in areas like offices or conference rooms.</p><p>Weatherproof Boxes: Featuring a tight-fitting seal and often made with a UV-resistant plastic blend, these boxes are suitable for outdoor use or in areas with high moisture levels.</p><p>Underground Boxes: Designed for direct burial underground, these boxes are typically made from a more robust plastic formulation with additional waterproofing measures.<br><br>&nbsp;</p><h2>Choosing the Right ABS Junction Box: Essential Considerations</h2><p>Selecting the appropriate ABS junction box requires considering several factors:</p><p>Size: Choose a box with ample space to accommodate all the wires and connections comfortably. Overcrowding can lead to overheating and potential fire hazards.</p><p>Number of Knockouts: Ensure the box has enough knockouts for the number of cables entering and exiting the box. Additional knockouts provide flexibility for future wiring needs.</p><p>Knockout Size: Select knockouts with diameters that match the size of your cables. This ensures a snug fit and prevents strain on the wires.</p><p>IP Rating: The IP (Ingress Protection) rating indicates the level of protection against dust and moisture. Choose a rating appropriate for the location of the box. For example, a bathroom would require a higher IP rating than a bedroom.</p><p>Fire Rating: Some applications may require a box with a specific fire rating, indicating its ability to withstand fire for a certain duration. Consult local building codes for any specific requirements.<br>&nbsp;</p><p>Compliance: Ensure the junction box is compliant with relevant electrical safety standards, such as those set by the National Electrical Code (NEC) in the United States.</p><p>&nbsp;</p><h2>Beyond the Basics: Additional Features and Considerations</h2><p>While the core function of an ABS junction box is to protect electrical connections, some additional features can enhance its functionality and safety:</p><p>Internal Grounding Bars: These bars provide a convenient point for grounding all the connected wires, promoting electrical safety and reducing the risk of ground faults.</p><p>Conduit Entry Points: Boxes designed for conduit use may have built-in hubs or flanges that facilitate secure and watertight connections with electrical conduits.</p><p>Clear Covers: Transparent covers allow for easy visual inspection of the connections inside the box without needing to remove the cover, which can be helpful for troubleshooting purposes.</p><p>Dual Compartment Boxes: These boxes feature a divider separating the wiring area from a device mounting area. This segregation can be useful for situations where low-voltage control wires need to be kept separate from higher voltage power cables.</p><p>&nbsp;</p><h2>Installation Tips for Safe and Secure Junction Boxes</h2><p>While ABS junction boxes are relatively simple to install, following these tips ensures a safe and secure installation:</p><p>Always consult a qualified electrician: Electrical work should only be performed by a licensed electrician to ensure adherence to electrical codes and safety standards.</p><p>Turn off the power: Before working on any electrical connections, ensure the power is off at the breaker box.</p><p>Use the correct tools: Utilize the appropriate tools for cutting knockouts, stripping wires, and securing the box.</p><p>Maintain proper clearance: Ensure there\'s adequate space around the box for proper ventilation and to prevent overheating of the connections.</p><p>Follow the manufacturer\'s instructions: Each box may have specific installation guidelines. Always refer to the manufacturer\'s instructions for proper installation procedures.</p><p>&nbsp;</p><h2>Conclusio</h2><p>ABS junction boxes may seem like humble components, but they play a vital role in ensuring the safety and functionality of our electrical systems. By understanding their purpose, benefits, and different types, you can appreciate the importance of these silent guardians in our homes and buildings. Remember, when it comes to electrical safety, choosing the right ABS junction box and proper installation are crucial. So, the next time you encounter an ABS junction box, remember the silent hero protecting the connections that power our modern lives.</p>',NULL,'202405181145Protect Your Connections_ ABS Junction Boxes Explained.jpg',NULL,'202405181145Protect Your Connections ABS Junction Boxes Explained.jpg',NULL,NULL,NULL,NULL,NULL,'2024-05-18 06:15:51','2024-05-18 06:15:51'),(6,'Taming the Cable Chaos: The Best Circle Cable Clips for Every Need','taming_the_cable_chaos:_the_best_circle_cable_clips_for_every_need',NULL,'<p>We\'ve all been there. Untangling a nightmarish mess of wires behind your desk, wrestling with phone chargers that seem to multiply like rabbits, or tripping over rogue power cords lurking in the shadows. Cable clutter is a universal enemy, a testament to our ever-increasing reliance on technology. But fear not, weary warriors against cable chaos! There\'s a simple, yet powerful weapon in your arsenal: the circle cable clip.</p><p>Circle cable clips, also known as cord organizers or cable management discs, are small, unassuming heroes in the fight for a tidy workspace (or any space, really). These little discs come in various sizes and materials, but their core function is the same: to keep your cables bundled together, preventing tangles, snags, and the general sense of frustration that comes with cable disarray.</p><p>But with a plethora of options available, choosing the right circle cable clip can feel overwhelming. Worry not! This guide will delve into the world of circle cable clips, exploring the different types, materials, and features to consider. We\'ll also explore specific recommendations for various needs, ensuring you find the perfect circle cable clip to conquer your cable clutter.</p><p>&nbsp;</p><h2>The Power of the Circle: Different Types of Cable Clips</h2><p>Circle cable clips come in a surprising variety, each offering unique advantages depending on your needs. Here\'s a breakdown of the most common types:</p><p>Simple Circle Clips: These are the classic cable management discs. They have a single hole in the center for running cables through and a self-adhesive backing for attaching to surfaces. Perfect for basic cable bundling on desks, walls, or even the backs of electronics.</p><p>Multi-Slot Clips: These clips offer multiple slots (usually 2-4) for organizing a larger number of cables. Great for managing thick power cords alongside thinner phone chargers or ethernet cables.</p><p>Adjustable Clips: These clever clips feature an adjustable band that allows you to customize the diameter of the bundle. Ideal for situations with cables of varying thicknesses or for keeping frequently accessed cables readily available.</p><p>Adhesive Pads: These aren\'t technically clips, but they deserve a mention. They are small, self-adhesive discs with a loop or channel for securing cables. Perfect for flat surfaces where traditional clips wouldn\'t work, like the back of your monitor or underneath a desk.</p><p>Locking Clips: These clips incorporate a locking mechanism that secures the cable bundle firmly. Ideal for high-traffic areas where cables might get snagged or pulled loose, or for managing heavy-duty cables.<br><br>&nbsp;</p><h2>Material Matters: Choosing the Right Stuff</h2><p>The material of your circle cable clip can impact its durability, aesthetics, and functionality. Here\'s a breakdown of the most common choices:</p><p>Plastic: The most popular option, plastic clips are affordable, lightweight, and come in a variety of colors. However, they might not be as strong or durable as other materials.</p><p>Silicone: Silicone clips offer a more flexible and grippy option. They are ideal for holding onto cables tightly and conforming to uneven surfaces.</p><p>Metal: For a more premium look and added durability, metal clips are a great choice. However, they tend to be more expensive and might not be suitable for all surfaces (avoid using them on delicate finishes).<br><br>&nbsp;</p><h2>Beyond the Basics: Features to Consider</h2><p>While the core function of circle cable clips is simple, some additional features can enhance their effectiveness:</p><p>Double-Sided Adhesive: This allows for secure attachment to a wider range of surfaces, including carpets or textured walls.</p><p>Reusability: Some clips use removable adhesive or a locking mechanism, allowing for repositioning without damaging surfaces.</p><p>Labeling Options: Clips with built-in labels or slots for labeling can help you identify specific cables easily, particularly useful for managing a complex setup.<br><br>&nbsp;</p><h2>Circle Cable Clip Champions: Recommendations for Every Need</h2><p>Now that you\'re armed with knowledge about different types, materials, and features, let\'s explore some specific circle cable clip recommendations for various situations:</p><p>The Desk Warrior: For the ultimate desk organization, consider a combination of simple and multi-slot circle clips. Use simple clips to bundle individual cables like phone chargers and ethernet cables. Utilize multi-slot clips for thicker power cords or situations where multiple cables need to be grouped together.</p><p>The Entertainment Enthusiast: Behind-the-TV cable clutter can be a nightmare. Here, opt for a combination of adhesive pads and locking clips. Use adhesive pads to secure low-profile cables like HDMI or antenna cables flat against the wall. Utilize locking clips for thicker power cords to ensure they stay put, even if someone bumps into the entertainment center.</p><p>The Traveler: For those who need on-the-go cable management, consider a set.consider a set of reusable silicone clips. Their lightweight and flexible nature makes them perfect for throwing in a bag or suitcase. Look for clips with a small profile that won\'t add bulk to your travel essentials.</p><p>The Nightstand Savior: The nightstand can become a tangle of phone chargers and headphone wires. Combat this with a combination of simple circle clips and adhesive pads. Use simple clips to bundle charging cables near the outlet, and utilize adhesive pads underneath the nightstand to secure excess cable slack.</p><p>The Eco-Conscious Organizer: If sustainability is a concern, there are eco-friendly circle cable clip options available. Look for clips made from recycled plastic or bamboo, which offer a more sustainable way to manage your cables.</p><p>&nbsp;</p><h2>Beyond the Clip: Cable Management Best Practices</h2><p>While circle cable clips are a powerful tool, a holistic approach is key to achieving cable management nirvana. Here are some additional tips:</p><p>Label Everything: Use labeling clips or write directly on your cables to identify them easily. This saves time and frustration when troubleshooting or rearranging your setup.</p><p>Utilize Cable Sleeves: For a more polished look and to prevent individual cable fraying, consider using braided cable sleeves. These sleeves bundle multiple cables together and offer a clean aesthetic.</p><p>Embrace Cable Ties: For excess cable slack that doesn\'t need frequent access, cable ties are a simple and effective solution. Just be mindful not to over-tighten and damage the cables.</p><p>Declutter Regularly: Take some time periodically to assess your cable situation. Discard any unused or unnecessary cables to prevent clutter build-up.</p><p>&nbsp;</p><h2>Conclusion</h2><p>With the power of circle cable clips and a few best practices, you can transform your workspace (or any space) from a tangled mess to an organized haven. Remember, a little planning and the right tools go a long way in taming cable chaos and bringing peace of mind. So, choose your circle cable clip champions, embrace some cable management best practices, and reclaim your space from the tyranny of tangled wires!</p>',NULL,'202405181148Taming the Cable Chaos_ The Best Circle Cable Clips for Every Need.jpg',NULL,'202405181148Taming the Cable Chaos The Best Circle Cable Clips for Every Need.jpg',NULL,NULL,NULL,NULL,NULL,'2024-05-18 06:18:29','2024-05-18 06:18:29');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (2,'Brand-1716197482.svg','image','2024-05-15 23:45:01','2024-05-20 04:01:22'),(3,'Brand-1716198891.svg','image','2024-05-15 23:45:07','2024-05-20 04:24:51'),(4,'Brand-1716198828.svg','image','2024-05-15 23:45:12','2024-05-20 04:23:48'),(5,'Brand-1716198836.svg','image','2024-05-15 23:49:24','2024-05-20 04:23:56'),(8,'Brand-1716198947.svg','icon','2024-05-20 04:25:08','2024-05-20 04:25:47');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_canonical` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Blog-1716287628.webp','image','Push Button Station','push_button_station','Push Button Station | Posina','Push Button Station | Posina','Push Button Station | Posina','Push Button Station | Posina','2024-05-14 04:28:13','2024-05-22 05:57:22'),(2,'Blog-1716287636.webp','image','Weather Proof Junction Box','weather_proof_junction_box','Weather Proof Junction Box | Posina','Weather Proof Junction Box | Posina','Weather Proof Junction Box | Posina','Weather Proof Junction Box | Posina','2024-05-14 04:29:53','2024-05-22 05:57:50'),(3,'Blog-1716287641.webp','image','ABS Junction Box','abs_junction_box','ABS Junction Box','ABS Junction Box','ABS Junction Box','ABS Junction Box','2024-05-16 00:26:20','2024-05-21 05:04:01'),(17,'Blog-1716288476.webp','ABS Jumbo Junction Box Image','Wall Plug','wall_plug','ABS Jumbo Junction Box','ABS Jumbo Junction Box','ABS Jumbo Junction Box','ABS Jumbo Junction Box','2024-05-16 05:36:28','2024-05-22 04:59:47');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `certificates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificates`
--

LOCK TABLES `certificates` WRITE;
/*!40000 ALTER TABLE `certificates` DISABLE KEYS */;
INSERT INTO `certificates` VALUES (1,'certificate-1716198549.webp','image','Metal Fabrication','2024-05-14 03:36:38','2024-05-20 04:19:09'),(2,'certificate-1716200951.jpg','image','Metal Machining','2024-05-14 03:36:59','2024-05-20 04:59:11'),(3,'certificate-1716201031.jpg','image','Metal Welding','2024-05-14 03:37:12','2024-05-20 05:00:31'),(5,'202405220914certificate-1716198549.webp','image','Why_FBR','2024-05-22 03:44:15','2024-05-22 03:44:15'),(6,'202405220914certificate-1716200951.jpg','image','admin','2024-05-22 03:44:23','2024-05-22 03:44:23');
/*!40000 ALTER TABLE `certificates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (5,'Ram','admin@gmail.com','5445546666','504 Jumbo Push Button','167','g','g','2024-05-20 06:32:42','2024-05-20 06:32:42'),(8,'TEST','admin@gmail.com','5445546666','504 Jumbo Push Button','1','ggg','k','2024-05-22 03:14:40','2024-05-22 03:14:40'),(9,'diya','admin@gmail.com','5445546666','504 Jumbo Push Button','3','h','hii','2024-05-22 04:04:13','2024-05-22 04:04:13'),(10,'diya','admin@gmail.com','5445546666','504 Jumbo Push Button','1','h','d','2024-05-22 04:05:32','2024-05-22 04:05:32');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactuses`
--

DROP TABLE IF EXISTS `contactuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactuses`
--

LOCK TABLES `contactuses` WRITE;
/*!40000 ALTER TABLE `contactuses` DISABLE KEYS */;
INSERT INTO `contactuses` VALUES (1,'TEST','admin@gmail.com','5445546666','test',NULL,'2024-05-22 01:17:48','2024-05-22 01:17:48'),(2,'TEST','admin@gmail.com','5445546666','test',NULL,'2024-05-22 01:18:36','2024-05-22 01:18:36'),(3,'TEST','admin@gmail.com','5445546666','test',NULL,'2024-05-22 01:18:55','2024-05-22 01:18:55'),(4,'diya','admin@gmail.com','5445547777','erwee','g','2024-05-22 01:56:44','2024-05-22 01:56:44'),(5,'diyajha','admin@gmail.com','5445546666','demo','demo','2024-05-22 01:58:59','2024-05-22 01:58:59'),(6,'TEST','admin@gmail.com','5445546666','erwee','dj','2024-05-22 01:59:36','2024-05-22 01:59:36'),(7,'TEST','admin@gmail.com','5445546666','ggg','hii','2024-05-22 04:06:00','2024-05-22 04:06:00');
/*!40000 ALTER TABLE `contactuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footers`
--

DROP TABLE IF EXISTS `footers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `footers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footers`
--

LOCK TABLES `footers` WRITE;
/*!40000 ALTER TABLE `footers` DISABLE KEYS */;
INSERT INTO `footers` VALUES (1,'footer-1715862203.png','image','https://www.google.com/maps/place/PARSHVANATH+INDUSTRIES/@20.3019701,72.9836922,17z/data=!3m1!4b1!4m6!3m5!1s0x3be0cc6a76412adf:0x156393ff293c4872!8m2!3d20.3019651!4d72.9862671!16s%2Fg%2F11j0t8zd8_?entry=ttu','<p>Rapidiously unleash best of the breed meta-services after principled vortals.</p>','https://www.instagram.com/','https://www.facebook.com/','https://www.twitter.com/','08045478609','posinavapi@gmail.com','Plot No 129/5, 2nd Floor, Siddhivinayak Industrial Estate,Vapi - 396195, Gujarat, India',NULL,'2024-05-20 06:41:39');
/*!40000 ALTER TABLE `footers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `headers`
--

DROP TABLE IF EXISTS `headers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `headers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `headers`
--

LOCK TABLES `headers` WRITE;
/*!40000 ALTER TABLE `headers` DISABLE KEYS */;
INSERT INTO `headers` VALUES (1,'header-1715690183.png','image','header-1715690183.png','+919825139923','10AM - 11:30PM','Siddhivinayak Industrial Estate,Vapi','image',NULL,'2024-05-22 05:19:10');
/*!40000 ALTER TABLE `headers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_canonical` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'certificate-1716361415.png','About Us | Posina','aboutus','Aboutus','About Us | Posina','About Us | Posina','About Us | Posina','About Us | Posina','2024-05-14 06:23:47','2024-05-22 06:40:35'),(3,'certificate-1716375841.png','image','blogs','Blogs','Blogs |Posina','Blogs |Posina','Blogs |Posina','Blogs |Posina','2024-05-20 06:58:27','2024-05-22 06:47:22'),(4,'certificate-1716375810.png','image','blog-details','Blog-Details',NULL,NULL,NULL,NULL,'2024-05-20 06:58:42','2024-05-22 05:33:30'),(5,'certificate-1716361458.png','image','contactus','ContactUs','Contact Us | Posina','Contact Us | Posina','Contact Us | Posina','Contact Us | Posina','2024-05-20 06:58:57','2024-05-22 06:47:04'),(6,'certificate-1716372558.png','image','products','Products','Products | Posina','Products | Posina','Products | Posina','Products | Posina','2024-05-20 06:59:11','2024-05-22 06:50:11'),(7,'certificate-1716372585.png','image','product_details','Product Details',NULL,NULL,NULL,NULL,'2024-05-21 03:21:20','2024-05-22 04:39:45');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2014_10_12_100000_create_password_resets_table',2),(6,'2024_05_13_053929_create_banners_table',2),(7,'2024_05_13_084943_create_brands_table',3),(8,'2024_05_13_091052_create_u_s_p_s_table',4),(9,'2024_05_13_092225_create_titles_table',5),(11,'2024_05_13_102502_create_w_c_s_table',6),(12,'2024_05_13_093939_create_abouts_table',7),(13,'2024_05_13_112320_create_serves_table',8),(14,'2024_05_13_124018_create_whoweares_table',9),(15,'2024_05_14_050747_create_blogs_table',10),(16,'2024_05_14_072100_create_testimonials_table',11),(17,'2024_05_14_085721_create_certificates_table',12),(18,'2024_05_14_091551_create_categories_table',13),(19,'2024_05_14_112305_create_menus_table',14),(20,'2024_05_14_120506_create_headers_table',15),(21,'2024_05_14_124325_create_footers_table',16),(22,'2024_05_17_040645_create_products_table',17),(23,'2024_05_20_105010_create_mision_visions_table',18),(24,'2024_05_20_114353_create_contacts_table',19),(25,'2024_05_21_053124_add_qty_to_products_table',20),(26,'2024_05_21_054524_create_technicals_table',21),(27,'2024_05_22_064610_create_contactuses_table',22),(28,'2024_05_21_053124_add_img_to_miss_table',23),(29,'2024_05_10_070004_create_staticseos_table',24);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mission_visions`
--

DROP TABLE IF EXISTS `mission_visions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mission_visions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mission_visions`
--

LOCK TABLES `mission_visions` WRITE;
/*!40000 ALTER TABLE `mission_visions` DISABLE KEYS */;
INSERT INTO `mission_visions` VALUES (1,'Our Mision','Our mission is to deliver high-quality electrical goods, leveraging advanced technology to ensure safety and reliability in households, commercial, and industrial settings. We prioritize exceptional service, customization, and timely delivery to exceed customer expectations.','header-1716203723.svg','Our Vision','Parshvanath Industries aims to lead the electrical goods industry globally through innovation, customer-centricity, and ethical business practices. We strive to set new standards while ensuring sustainability and exceeding customer expectations.','image1-1716203723.svg','image','image',NULL,'2024-05-20 05:52:16','','');
/*!40000 ALTER TABLE `mission_visions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multiimage` longtext COLLATE utf8mb4_unicode_ci,
  `desc1` text COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_canonical` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `qty` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (3,'1','504 Jumbo Push Button','504_jumbo_push_button','1000','certificate-1716282304.webp','image','image','ProductMulti-1716282304.DSC_8960 (1).webp|ProductMulti-1716282304.DSC_8954 (2).webp|ProductMulti-1716282304.DSC_9110 (1).webp|ProductMulti-1716282304.DSC_8944 (1).webp|ProductMulti-1716285764.IMG_20240508_162101 (1).webp','<p>With an objective to serve clients in the best possible manner, we manufacture and supply a quality assured range of <strong>Electric Push Button Box</strong>. This switch is manufactured using the best grade raw materials and modern techniques by our skilled professionals at our well-maintained production unit. The provided switch is basically used to turn off or on the supply of current in different electrical appliances. In addition to this, the offered<strong>&nbsp;Electric Push Button Box</strong>&nbsp;can be bought from us at rock bottom prices within committed time frame.</p><p>&nbsp;</p>','image','504 Jumbo Push Button','504 Jumbo Push Button','504 Jumbo Push Button','2024-05-17 00:33:08','2024-05-21 04:32:44',20),(4,'1','503 Mini Push Button','503_mini_push_button','1000','certificate-1716285880.webp','image','image','ProductMulti-1716285880.DSC_6821-1 (2).webp|ProductMulti-1716285880.DSC_6821-1 (1) (1).webp|ProductMulti-1716285880.DSC_6825 (1).webp|ProductMulti-1716285880.DSC_6801 (2).webp|ProductMulti-1716285941.DSC_8944 (1).webp|ProductMulti-1716285941.DSC_8954 (1) (1).webp','<p>Push button box of the highest quality is being processed by Parshvanath Industries. It is perfect for push-button phones, kitchen appliances, magnetic locks, as well as a variety of other mechanical and electronic equipment. In our product, human pressure is used to turn on an internal switching mechanism and control an electrical circuit. The best functionality, longest functional life, and highest performance efficiency are all attributes of push button box. It can be connected to other mechanical applications and is appropriate for industrial applications. The said device has a small footprint and is simple to install &amp; maintain.</p>','Push Button Box','Push Button Box','Push Button Box','Push Button Box','2024-05-17 00:34:21','2024-05-21 04:35:41',0),(5,'1','Electric Push Button Station','electric_push_button_station','1000','certificate-1716287465.webp','image','image','ProductMulti-1716286354.DSC_6825 (2).webp|ProductMulti-1716286354.DSC_6821-1 (2).webp|ProductMulti-1716286354.DSC_6821-1 (1) (1).webp|ProductMulti-1716286354.DSC_6825 (1).webp|ProductMulti-1716287465.DSC_6825 (2).webp|ProductMulti-1716287465.DSC_6821-1 (2).webp|ProductMulti-1716287465.DSC_6821-1 (1) (1).webp','<p>At Parshvanath Industries, we are offering finest quality weatherproof electrical junction boxes. These are used in the electrical industry to provide huge electrical devices with a start-up voltage. Our offerings are processed under great surveillance by using modern production techniques and excellent raw materials. The said solutions are touted as the finest option for shielding components from hazardous outside factors. Weatherproof electrical junction boxes are normally sealed enclosures that can be installed on surfaces like roof overhangs, exterior walls, and decks. Outside trash cans and lights are mounted using these devices. The weather is shut off when these boxes are correctly connected.</p>','Weatherproof Electrical Junction Boxes','Weatherproof Electrical Junction Boxes','Weatherproof Electrical Junction Boxes','Weatherproof Electrical Junction Boxes','2024-05-17 06:56:47','2024-05-22 05:02:33',80),(6,'1','501 Mini Push Button','501_mini_push_button','1000','202405211031DSC_8944.webp','image','image','ProductMulti-1716287511.DSC_8954 (2).webp|ProductMulti-1716287511.DSC_9110 (1).webp','<p>At Parshvanath Industries, we are offering finest quality weatherproof electrical junction boxes. These are used in the electrical industry to provide huge electrical devices with a start-up voltage. Our offerings are processed under great surveillance by using modern production techniques and excellent raw materials. The said solutions are touted as the finest option for shielding components from hazardous outside factors. Weatherproof electrical junction boxes are normally sealed enclosures that can be installed on surfaces like roof overhangs, exterior walls, and decks. Outside trash cans and lights are mounted using these devices. The weather is shut off when these boxes are correctly connected.</p>',NULL,NULL,NULL,NULL,'2024-05-21 05:01:51','2024-05-21 05:02:32',900),(7,'2','Weatherproof Electrical Junction Boxes','weatherproof_electrical_junction_boxes','1000','202405211202DSC_8954 (2).webp','image','image','ProductMulti-1716292932.DSC_9110 (1).webp|ProductMulti-1716292932.DSC_8960 (1).webp|ProductMulti-1716292932.DSC_8954 (2).webp|ProductMulti-1716292932.DSC_8944 (1).webp','<p>At Parshvanath Industries, we are offering finest quality weatherproof electrical junction boxes. These are used in the electrical industry to provide huge electrical devices with a start-up voltage. Our offerings are processed under great surveillance by using modern production techniques and excellent raw materials. The said solutions are touted as the finest option for shielding components from hazardous outside factors. Weatherproof electrical junction boxes are normally sealed enclosures that can be installed on surfaces like roof overhangs, exterior walls, and decks. Outside trash cans and lights are mounted using these devices. The weather is shut off when these boxes are correctly connected.</p>',NULL,NULL,NULL,NULL,'2024-05-21 06:32:12','2024-05-21 06:32:12',9000),(8,'3','575 Jumbo ABS Junction Box','575_jumbo_abs_junction_box','1000','202405220527DSC_8954 (1) (1).webp','image','image','ProductMulti-1716355630.DSC_8960 (1).webp|ProductMulti-1716355630.DSC_8954 (2).webp|ProductMulti-1716355630.DSC_9110 (1).webp|ProductMulti-1716355630.DSC_8944 (1).webp|ProductMulti-1716355630.DSC_8954 (1) (1).webp','<p>With an objective to serve clients in the best possible manner, we manufacture and supply a quality assured range of 575 Jumbo ABS Junction Box. This switch is manufactured using the best grade raw materials and modern techniques by our skilled professionals at our well-maintained production unit. The provided switch is basically used to turn off or on the supply of current in different electrical appliances. In addition to this, the offered<strong>&nbsp;</strong>575 Jumbo ABS Junction Box&nbsp;can be bought from us at rock bottom prices within committed time frame.</p>',NULL,NULL,NULL,NULL,'2024-05-21 23:57:10','2024-05-21 23:58:08',90),(9,'17','Wall Plug','wall_plug','1000','202405221030DSC_8954 (2).webp','image','image','ProductMulti-1716373846.DSC_6825 (2).webp|ProductMulti-1716373846.DSC_6821-1 (2).webp|ProductMulti-1716373846.DSC_6821-1 (1) (1).webp|ProductMulti-1716373846.DSC_6825 (1).webp','<p>With an objective to serve clients in the best possible manner, we manufacture and supply a quality assured range of <strong>Electric Push Button Box</strong>. This switch is manufactured using the best grade raw materials and modern techniques by our skilled professionals at our well-maintained production unit. The provided switch is basically used to turn off or on the supply of current in different electrical appliances. In addition to this, the offered<strong>&nbsp;Electric Push Button Box</strong>&nbsp;can be bought from us at rock bottom prices within committed time frame.</p><p>&nbsp;</p>',NULL,NULL,NULL,NULL,'2024-05-22 05:00:46','2024-05-22 05:01:13',80);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serves`
--

DROP TABLE IF EXISTS `serves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `serves` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serves`
--

LOCK TABLES `serves` WRITE;
/*!40000 ALTER TABLE `serves` DISABLE KEYS */;
INSERT INTO `serves` VALUES (2,'Push Button Station','Brand-1716189347.svg','icon','202405131146service-bg-2c.jpg','image','<p>Collaborative optim wireless transparent products.</p>','2024-05-13 06:16:32','2024-05-20 01:45:47'),(3,'Abs Junction Box','Brand-1716195688.svg','image','202405160655202405131146service-bg-2c1.jpg','image','<p>Collaborative optim wireless transparent products.</p>','2024-05-16 01:25:22','2024-05-20 03:31:28'),(4,'Abs-A.C.Box','Brand-1716195697.svg','image','202405160655202405131146service-bg-2c1.jpg','image','<p>Collaborative optim wireless transparent products.</p>','2024-05-16 01:25:59','2024-05-20 03:31:37'),(5,'PVC Grip','Brand-1716195703.svg','image','202405160656202405131146service-bg-2c1.jpg','image','<p>Collaborative optim wireless transparent products.</p>','2024-05-16 01:26:35','2024-05-20 03:31:43');
/*!40000 ALTER TABLE `serves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staticseos`
--

DROP TABLE IF EXISTS `staticseos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staticseos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_canonical` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staticseos`
--

LOCK TABLES `staticseos` WRITE;
/*!40000 ALTER TABLE `staticseos` DISABLE KEYS */;
INSERT INTO `staticseos` VALUES (1,'Posina','Posina','Posina','Posina',NULL,'2024-05-22 06:26:26');
/*!40000 ALTER TABLE `staticseos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `technicals`
--

DROP TABLE IF EXISTS `technicals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `technicals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `technicals`
--

LOCK TABLES `technicals` WRITE;
/*!40000 ALTER TABLE `technicals` DISABLE KEYS */;
INSERT INTO `technicals` VALUES (1,'Usage/Application','1','4','Industrial','2024-05-21 01:14:44','2024-05-21 01:46:11'),(2,'Type','1','3','WEATHERPROOF','2024-05-21 01:23:12','2024-05-21 01:23:12'),(3,'Material','1','3','Engineering material','2024-05-21 01:23:39','2024-05-21 01:23:39'),(4,'Shape','1','3','Rectangular','2024-05-21 01:24:04','2024-05-21 01:24:04'),(5,'Product Type','3','8','Junction Box','2024-05-21 23:59:23','2024-05-21 23:59:40');
/*!40000 ALTER TABLE `technicals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Trainer','<p>\"Once we settled on a strategy, the team went to workimplementing.The website they created for stunning\"</p>','202405140840author-1a.jpg','image','Ravi Shah','2024-05-14 03:10:41','2024-05-16 05:16:58'),(2,'Marketing Coordinator','<p>\"Once we settled on a strategy, the team went to work implementing. The website they created for stunning.\"</p>','202405140849author-2a.jpg','image','Annette Black','2024-05-14 03:19:54','2024-05-16 05:17:05'),(3,'Developer','<p>\"Once we settled on a strategy, the team went to workimplementing.The website they created for stunning\"</p>','202405161051202405140840author-1a.jpg','image','Yash','2024-05-16 05:21:05','2024-05-16 05:21:05');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `titles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titles`
--

LOCK TABLES `titles` WRITE;
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;
INSERT INTO `titles` VALUES (1,'USP','The Benefits of Choosing Our Industrial Expertise',NULL,'2024-05-13 04:01:53'),(2,'Why Choose Us','Sustainable Solutions for a Better Tomorrow',NULL,'2024-05-13 05:11:39'),(3,'Industry We Serve','Turning Visions into Sustainable Power Plants',NULL,'2024-05-13 06:12:38'),(4,'Latest News','Our Recent Articles',NULL,NULL),(5,'TESTIMONIALS','What Our Customers Say About Products',NULL,'2024-05-16 05:10:26'),(6,'OUR CERTIFICATES','OUR CERTIFICATES',NULL,'2024-05-16 05:24:13'),(7,'OUR CATEGORIES','Transform Your Company with Our Products',NULL,'2024-05-14 04:25:17'),(8,'NEW PRODUCTS','Our Latest Products',NULL,'2024-05-22 00:33:35'),(9,NULL,NULL,NULL,NULL),(10,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `titles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `u_s_p_s`
--

DROP TABLE IF EXISTS `u_s_p_s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `u_s_p_s` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `u_s_p_s`
--

LOCK TABLES `u_s_p_s` WRITE;
/*!40000 ALTER TABLE `u_s_p_s` DISABLE KEYS */;
INSERT INTO `u_s_p_s` VALUES (2,'Our Domain Expertise','<p>Electric equipment and goods designing and development are technical task, which is handled by</p>','Brand-1716028324.svg','icon','2024-05-15 23:50:37','2024-05-18 05:02:04'),(3,'Product Portfolio','<p>The company manufactures electrical goods, equipment &amp; supplies</p>','Brand-1716027164.png','icon','2024-05-15 23:51:12','2024-05-18 04:42:44'),(4,'Infrastructure','<p>Our widely spread infrastructure in Vapi has a massive installation capacity. The resources and technology.</p>','Brand-1716028281.png','icon','2024-05-15 23:52:14','2024-05-18 05:01:21'),(5,'Improvement','<p>Electric equipment and goods designing and development are technical task, which is handled by.</p>','202405160523icon-47d.svg','icon','2024-05-15 23:53:00','2024-05-15 23:53:00');
/*!40000 ALTER TABLE `u_s_p_s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$12$rV4uM4yIa80eWVyJQhtm7ePnJ3KB/4LzU5iWa3sHdKAb7XnSnBQO6',NULL,'2024-05-09 04:26:25','2024-05-09 04:26:25'),(2,'admin','admin1@gmail.com',NULL,'$2y$12$DIlpIvxtTG8UQWzdLB6/fuRV8zx.bOznq5edBUsKta7fsDJNovi/6',NULL,'2024-05-13 00:30:07','2024-05-13 00:30:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_c_s`
--

DROP TABLE IF EXISTS `w_c_s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `w_c_s` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_c_s`
--

LOCK TABLES `w_c_s` WRITE;
/*!40000 ALTER TABLE `w_c_s` DISABLE KEYS */;
INSERT INTO `w_c_s` VALUES (1,'Excellent customization','Brand-1716178363.svg','icon','2024-05-13 05:11:04','2024-05-19 22:42:43'),(2,'Time-bound execution of orders','Brand-1716028414.png','icon','2024-05-16 00:19:31','2024-05-18 05:03:34'),(3,'Reliable products at cost-effective prices','Brand-1716028537.png','icon','2024-05-16 00:20:07','2024-05-18 05:05:37'),(4,'Team of experienced personnel','Brand-1716028495.png','icon','2024-05-16 00:20:16','2024-05-18 05:04:55');
/*!40000 ALTER TABLE `w_c_s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `whoweares`
--

DROP TABLE IF EXISTS `whoweares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `whoweares` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countertitle1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countertitle2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countertitle3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countertitle4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `whoweares`
--

LOCK TABLES `whoweares` WRITE;
/*!40000 ALTER TABLE `whoweares` DISABLE KEYS */;
INSERT INTO `whoweares` VALUES (1,'Who We Are','Leading Manufacturer & Supplier of Electrical Components','<p>Manufacturer &amp; Supplier for including Circle Cable Clip, Abs Junction Box, Abs-A.C.Box, PVC Grip, Push Button Station and Weatherproof Junction Box.</p>','header-1716291586.png','header-1716291346.png','image','video','1715858035.mp4','image','90','Trusted Professionals','80','Innovative Solutions','85','Security Advices',NULL,NULL,NULL,'2024-05-21 06:09:46');
/*!40000 ALTER TABLE `whoweares` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-22 17:52:40
