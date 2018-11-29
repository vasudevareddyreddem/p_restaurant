

Create Table

CREATE TABLE `aboutus` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1


CREATE TABLE `aboutus_brief` (
  `a_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `banner` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1



Create Table

CREATE TABLE `aboutus_paragrap` (
  `a_p_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`a_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1


CREATE TABLE `blog` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `procedure` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1



Create Table

CREATE TABLE `chefs` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `specialist` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1


Create Table

CREATE TABLE `contact_time` (
  `c_t_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `day` varchar(250) DEFAULT NULL,
  `time_from` varchar(250) DEFAULT NULL,
  `time_to` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`c_t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1


Create Table

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `banner` varchar(250) DEFAULT NULL,
  `day` varchar(250) DEFAULT NULL,
  `time_from` varchar(250) DEFAULT NULL,
  `time_to` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `facebook_link` varchar(250) DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `google_link` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1

CREATE TABLE `food type` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `food_type` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1



Create Table

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1



Create Table

CREATE TABLE `header` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `favicon` varchar(250) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `banner` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1


CREATE TABLE `menu` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_brief` int(11) DEFAULT NULL,
  `banner` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `menu_type` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `food_type` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1



Create Table

CREATE TABLE `menu_brief` (
  `m_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `food_type` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `banner` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `menu_type` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1


Create Table

CREATE TABLE `menu_data` (
  `m_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `emp_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `food_type` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1

Create Table

CREATE TABLE `reservation_brief` (
  `r_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1

Create Table

CREATE TABLE `reservation_home` (
  `r_h_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

Create Table

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1

Create Table

CREATE TABLE `services_brief` (
  `s_r_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `banner` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1

Create Table

CREATE TABLE `servies_brief_banner` (
  `s_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`s_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1
CREATE TABLE `testimonial` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1

Create Table

CREATE TABLE `topheader` (
  `t_h_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `facebook_link` varchar(250) DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `google_link` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

Create Table

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `mobile_number` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `current_address` varchar(250) DEFAULT NULL,
  `premenent_address` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1



CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `facebook_link` varchar(250) DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `google_link` varchar(250) DEFAULT NULL,
  `Mondaytime_from` varchar(250) DEFAULT NULL,
  `Mondaytime_to` varchar(250) DEFAULT NULL,
  `Tuesdaytime_from` varchar(250) DEFAULT NULL,
  `Tuesdaytime_to` varchar(250) DEFAULT NULL,
  `Wednesdaytime_from` varchar(250) DEFAULT NULL,
  `Wednesdaytime_to` varchar(250) DEFAULT NULL,
  `Thursdaytime_from` varchar(250) DEFAULT NULL,
  `Thursdaytime_to` varchar(250) DEFAULT NULL,
  `Fridaytime_from` varchar(250) DEFAULT NULL,
  `Fridaytime_to` varchar(250) DEFAULT NULL,
  `Saturdaytime_from` varchar(250) DEFAULT NULL,
  `Saturdaytime_to` varchar(250) DEFAULT NULL,
  `Sundaytime_from` varchar(250) DEFAULT NULL,
  `Sundaytime_to` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1

