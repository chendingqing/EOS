/*
 Navicat Premium Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : test1

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 08/03/2019 17:32:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `permission_id` smallint(6) NOT NULL,
  `sort` smallint(6) NOT NULL DEFAULT 0,
  `is_system` tinyint(4) NOT NULL DEFAULT 0,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 26 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, '系统设置', '#', 'active open', 'admin*', 'icon-dashboard', 1, 0, 1, 0, '', '2016-08-03 10:05:10', '2019-03-06 08:13:04');
INSERT INTO `menus` VALUES (2, '菜单列表', 'admin/menu', 'active open', '/admin/menu', 'icon-dashboard', 12, 0, 1, 1, '', '2016-08-03 10:06:56', '2019-03-06 06:31:34');
INSERT INTO `menus` VALUES (3, '后台用户列表', 'admin/user', 'active open', '/admin/user', '', 8, 0, 1, 1, '', '2016-08-04 06:25:53', '2019-03-06 08:12:50');
INSERT INTO `menus` VALUES (4, '权限列表', 'admin/permission ', 'active open', '/admin/permission', NULL, 10, 2, 1, 1, '', '2016-08-04 06:42:21', '2016-08-04 06:42:21');
INSERT INTO `menus` VALUES (5, '角色列表', 'admin/role', 'active open', '/admin/role', NULL, 9, 4, 1, 1, '', '2016-08-04 06:43:03', '2016-08-04 06:43:03');
INSERT INTO `menus` VALUES (7, '日志管理', '#', 'active open', 'logs*', 'glyphicon glyphicon-pencil', 5, 1, 1, 0, '', '2016-08-04 06:46:33', '2019-03-06 06:53:45');
INSERT INTO `menus` VALUES (8, '查看日志', 'logs', 'active open', '/logs-2', '', 6, 0, 1, 7, '', '2016-08-04 06:47:30', '2016-08-08 17:21:36');
INSERT INTO `menus` VALUES (17, '新闻系统', '#', 'active open', '', 'glyphicon glyphicon-list-alt', 1, 0, 0, 0, '', '2019-03-06 08:05:25', '2019-03-06 08:05:25');
INSERT INTO `menus` VALUES (16, '发布项目', '#', 'active open', '', ' glyphicon glyphicon-circle-arrow-up', 1, 0, 1, 0, '', '2019-03-06 08:03:52', '2019-03-06 08:03:52');
INSERT INTO `menus` VALUES (15, '财务管理', '#', 'active open3', '', 'glyphicon glyphicon-usd', 1, 100, 1, 0, '', '2019-03-06 08:02:55', '2019-03-06 08:02:55');
INSERT INTO `menus` VALUES (18, '项目列表', '#', 'active open', '3', '', 1, 100, 0, 16, '', '2019-03-06 08:06:25', '2019-03-06 08:06:25');
INSERT INTO `menus` VALUES (19, '账户资金', '#', 'active open', '', '', 1, 100, 0, 15, '', '2019-03-06 08:08:04', '2019-03-06 08:08:04');
INSERT INTO `menus` VALUES (20, '充值订单', 'admin/recharge_record', 'active open', 'admin/recharge_record', '', 1, 10, 1, 15, '', '2019-03-06 08:09:19', '2019-03-08 07:36:38');
INSERT INTO `menus` VALUES (21, '交易记录', 'auth/money_management', 'active open', 'auth/money_management', '', 1, 0, 1, 15, '', '2019-03-06 08:10:02', '2019-03-08 07:43:52');
INSERT INTO `menus` VALUES (22, '红包记录', '#', 'active open', '', '', 1, 10, 0, 15, '', '2019-03-06 08:10:41', '2019-03-06 08:10:41');
INSERT INTO `menus` VALUES (23, '提现记录', '#', 'active open', '', '', 1, 10, 0, 15, '', '2019-03-06 08:11:15', '2019-03-06 08:11:15');
INSERT INTO `menus` VALUES (24, '用户管理', 'admin/reg_user', 'active open', 'admin/reg_user', ' glyphicon glyphicon-user', 1, 0, 1, 0, '', '2019-03-06 08:14:03', '2019-03-07 06:51:39');
INSERT INTO `menus` VALUES (25, '注册用户', 'admin/reg_user', 'active open', 'admin/reg_user', '', 1, 0, 0, 24, '', '2019-03-07 06:47:48', '2019-03-07 06:55:27');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES ('2016_06_17_082531_add_deleted_at_to_article_table', 1);
INSERT INTO `migrations` VALUES ('2016_08_01_023842_entrust_setup_tables', 1);
INSERT INTO `migrations` VALUES ('2016_08_03_092224_create_menus_table', 1);
INSERT INTO `migrations` VALUES ('2016_08_08_125646_create_articles_table', 1);
INSERT INTO `migrations` VALUES ('2016_08_08_131230_create_tags_table', 1);
INSERT INTO `migrations` VALUES ('2016_08_08_132016_create_posts_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  INDEX `password_resets_email_index`(`email`) USING BTREE,
  INDEX `password_resets_token_index`(`token`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role`  (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `permission_role_role_id_foreign`(`role_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (1, 19);
INSERT INTO `permission_role` VALUES (1, 20);
INSERT INTO `permission_role` VALUES (5, 19);
INSERT INTO `permission_role` VALUES (5, 20);
INSERT INTO `permission_role` VALUES (6, 19);
INSERT INTO `permission_role` VALUES (7, 19);
INSERT INTO `permission_role` VALUES (8, 19);
INSERT INTO `permission_role` VALUES (9, 19);
INSERT INTO `permission_role` VALUES (10, 19);
INSERT INTO `permission_role` VALUES (12, 19);
INSERT INTO `permission_role` VALUES (13, 19);
INSERT INTO `permission_role` VALUES (13, 20);
INSERT INTO `permission_role` VALUES (14, 19);
INSERT INTO `permission_role` VALUES (15, 19);
INSERT INTO `permission_role` VALUES (16, 19);
INSERT INTO `permission_role` VALUES (17, 19);

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_unique`(`name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'view-backend', '浏览后台', '该权限可以浏览后台', '2016-08-01 06:49:15', '2016-08-01 06:49:15');
INSERT INTO `permissions` VALUES (5, 'logs', '日志管理', '日志管理', '2016-08-04 06:13:29', '2016-08-04 06:13:29');
INSERT INTO `permissions` VALUES (6, 'logs-2', '查看日志', '查看日志', '2016-08-04 06:14:09', '2016-08-04 06:14:09');
INSERT INTO `permissions` VALUES (7, 'admin', '用户管理', '用户管理', '2016-08-04 06:14:50', '2016-08-04 06:14:50');
INSERT INTO `permissions` VALUES (8, 'admin/user', '用户列表', '用户列表', '2016-08-04 06:15:18', '2016-08-04 06:15:18');
INSERT INTO `permissions` VALUES (9, 'admin/role', '角色列表', '角色列表', '2016-08-04 06:15:34', '2016-08-04 06:22:50');
INSERT INTO `permissions` VALUES (10, 'admin/permission', ' 权限列表', ' 权限列表', '2016-08-04 06:15:50', '2016-08-04 06:15:50');
INSERT INTO `permissions` VALUES (12, 'admin/menu', ' 菜单列表', ' 菜单列表', '2016-08-04 06:23:20', '2016-08-04 06:23:20');
INSERT INTO `permissions` VALUES (13, 'admin/index', '控制台', '控制台', '2016-08-04 06:23:52', '2016-08-04 06:23:52');
INSERT INTO `permissions` VALUES (14, 'admin/tags', '标签管理', '标签管理', '2016-08-04 11:11:44', '2016-08-04 11:11:44');
INSERT INTO `permissions` VALUES (15, 'admin/recharge_record', '充值订单', '后台权限', '2019-03-08 07:07:20', '2019-03-08 07:34:23');
INSERT INTO `permissions` VALUES (16, 'admin/money_management', '交易记录', '交易记录', '2019-03-08 07:08:22', '2019-03-08 07:34:12');
INSERT INTO `permissions` VALUES (17, 'admin/reg_user', '注册用户', 'admin/reg_user', '2019-03-08 07:09:24', '2019-03-08 07:09:24');
INSERT INTO `permissions` VALUES (18, '#', '财务管理', '财务管理', '2019-03-08 07:38:41', '2019-03-08 07:38:41');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ddd` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for recharge_records
-- ----------------------------
DROP TABLE IF EXISTS `recharge_records`;
CREATE TABLE `recharge_records`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '订单id',
  `user_id` int(11) NULL DEFAULT NULL COMMENT '用户id',
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户姓名',
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '业务类型',
  `pay_money` float(11, 2) NULL DEFAULT NULL COMMENT '支付金额',
  `entry_money` float(11, 2) NULL DEFAULT NULL COMMENT '入账金额',
  `order_time` timestamp NULL DEFAULT NULL COMMENT '下单时间',
  `status` int(11) NULL DEFAULT NULL COMMENT '状态',
  `entry_time` timestamp NULL DEFAULT NULL COMMENT '入账时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of recharge_records
-- ----------------------------
INSERT INTO `recharge_records` VALUES (1, '20180728162209051', 1, '小明', '1', 100.00, 0.00, '2018-07-28 16:22:09', 1, '2019-03-08 11:31:42');

-- ----------------------------
-- Table structure for reg_users
-- ----------------------------
DROP TABLE IF EXISTS `reg_users`;
CREATE TABLE `reg_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户姓名',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '登录密码',
  `pay_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '支付密码',
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '手机号',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `reg_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '注册邮箱',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '注册时间',
  `eos` float(11, 4) NULL DEFAULT NULL COMMENT '余额',
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user`  (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`, `role_id`) USING BTREE,
  INDEX `role_user_role_id_foreign`(`role_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES (2, 20);
INSERT INTO `role_user` VALUES (3, 20);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_unique`(`name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (19, 'admin', '后台管理员', '无敌的存在', '2016-08-03 04:25:30', '2016-08-04 08:13:04');
INSERT INTO `roles` VALUES (20, 'user', '浏览后台', '浏览后台而已', '2016-08-03 04:29:07', '2016-08-03 04:29:07');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for transaction_managements
-- ----------------------------
DROP TABLE IF EXISTS `transaction_managements`;
CREATE TABLE `transaction_managements`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水号',
  `user_id` int(11) NULL DEFAULT NULL COMMENT '用户id',
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户名',
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '较易类型',
  `send_money` float(11, 4) NULL DEFAULT NULL COMMENT '消费金额',
  `status` int(11) NULL DEFAULT NULL COMMENT '状态',
  `info` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '说明',
  `transaction_time` timestamp NULL DEFAULT NULL COMMENT '交易时间',
  `money` float(11, 2) NULL DEFAULT NULL COMMENT '可用余额',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaction_managements
-- ----------------------------
INSERT INTO `transaction_managements` VALUES (1, 1, '小明', '1', 30.0000, 1, '消费买EOS', '2019-03-07 00:00:00', 55.00);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '775397252@qq.com', '$2y$10$VF/WMt3i7W/x6n.Ruv4YuuT9ZEyYYzlgxP9Xvaf81Mpa1kncy2Tk.', 'qNUubnvVXOSe6mJS1e3cR6ZdkMG3NTWetjzSLdmCoUhaYGItfeU6NEpDRXJy', '2016-07-31 09:54:11', '2019-03-08 08:29:10');
INSERT INTO `users` VALUES (2, '775397252', 'admin@qq.com', '$2y$10$VF/WMt3i7W/x6n.Ruv4YuuT9ZEyYYzlgxP9Xvaf81Mpa1kncy2Tk.', 'PNmtYVl2WqSt8xbQioRGy1VCx4h5zWPOOnRcJn1QDaX3w8wgNXo36SyroNFl', '2016-08-03 08:16:01', '2019-03-08 07:13:01');
INSERT INTO `users` VALUES (3, 'user', 'user@qq.com', '$2y$10$9JYOEFDUCVZsmxJVkg23Nughr4GYw5T6qbORKxaljWFAE3/wk/RIa', 'VeNyAl8s4wCDHccACazsXePvzijXYcx2zl40VOeLK6kMnj6l5rxqNvFEBFuF', '2019-03-08 07:13:44', '2019-03-08 08:29:31');

SET FOREIGN_KEY_CHECKS = 1;
