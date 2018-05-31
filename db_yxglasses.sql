/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : db_yxglasses

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-05-31 11:48:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for yx_accessories
-- ----------------------------
DROP TABLE IF EXISTS `yx_accessories`;
CREATE TABLE `yx_accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `altImg` varchar(255) DEFAULT NULL,
  `describe` varchar(5000) DEFAULT NULL,
  `add_title` varchar(255) DEFAULT NULL,
  `add_content` varchar(5000) DEFAULT NULL,
  `imgs` varchar(2048) DEFAULT NULL,
  `addTime` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yx_accessories
-- ----------------------------
INSERT INTO `yx_accessories` VALUES ('1', '柔软的超细纤维开口袋', '$15', '1527063831.png', '柔软的超细纤维开口袋，能够很好地保护您的飞行眼镜在飞行包或口袋中时不被划伤。而且，它们也是清洁镜片的完美材料！', '产品颜色', '<p>银色、蓝色</p>', '1527063831.png', '2018-05-23 16:26:55', '0', null);
INSERT INTO `yx_accessories` VALUES ('2', '拉链式眼镜盒', '$19', '1527064169.png', '拉链式硬壳是由耐用的尼龙材料覆盖的塑料外壳制成。精致的设计为您的飞行眼睛保驾护航。柔软的面料衬垫，是您太阳镜的完美保护套，使您的眼镜免受划伤。由于这种箱子的形状有很大的开放性，所以拉链式眼镜盒与所有Flying Eyes的款式搭配得非常好。', '', '<p></p>', '1527064169.png;1527064182.png', '2018-05-23 16:29:58', '0', null);
INSERT INTO `yx_accessories` VALUES ('3', '眼镜盒和清洁布', '$19', '1527064268.png', '新款折叠盒是由极耐用的钢板制成，外层覆盖人造革。独特的三角盒造型为您的Flying Eyes太阳镜提供了坚实的保护。柔软的面料衬垫，是您太阳镜的完美保护套，使您的眼镜免受划伤。最重要的是，当您佩戴上Flying Eyes太阳镜时，三角盒的折叠设计更易存放。', '', '<p></p>', '1527064268.png;1527064277.png;1527064286.png', '2018-05-23 16:31:39', '0', null);
INSERT INTO `yx_accessories` VALUES ('4', '原装福来鹰非弹性扁平织带和塑料锁扣', '$28', '1527071342.png', '这款霍克鹰非弹性扁平织带、塑料锁扣仅适用于2014年8月份以后生产的新款霍克鹰飞行眼镜。原装配件，不用担心该产品与原装产品不适合：包括一个非弹性扁平织带和一个橡胶锁扣。您的耳机可以将头带固定到位，塑料按钮则可以将头带保持在头部后方。如果您要做特技飞行或在开放式驾驶舱内飞行，我们建议您使用这种含有塑料锁扣的非弹性扁平织带。', '', '<p></p>', '1527071342.png;1527071352.png;1527071362.png', '2018-05-23 18:29:35', '0', null);
INSERT INTO `yx_accessories` VALUES ('5', '原装福来鹰普通镜腿', '$28', '1527073224.png', '镜腿替换配件仅适用于原装福来鹰系列眼镜（2014年8月以后的产品）。原装配件，不用担心该产品与原装产品不适合。当您没有佩戴头盔和头戴式耳机时，福来鹰飞行眼镜可以充当普通太阳镜使用。', '', '<p></p>', '1527073224.png', '2018-05-23 19:00:38', '0', null);
INSERT INTO `yx_accessories` VALUES ('6', '霍克鹰非弹性扁平织带、橡胶锁扣', '$28', '1527073267.png', '这款霍克鹰非弹性扁平织带、橡胶锁扣仅适用于2014年8月份以后生产的新款霍克鹰飞行眼镜。原装配件，不用担心该产品与原装产品不适合：包括一个非弹性扁平织带和一个橡胶锁扣', '产品颜色', '<p>亮黑、暗黑（亚光黑）</p>', '1527073267.png;1527073269.png', '2018-05-23 19:01:45', '0', null);
INSERT INTO `yx_accessories` VALUES ('7', '霍克鹰标准和超薄的镜腿替换配件', '$28', '1527073328.png', '镜腿替换配件：适用于新款福来鹰霍克鹰系列的眼镜（2014年8月以后的产品）。原装配件，不用担心该产品与原装产品不适合。标准镜腿可以让您像佩戴普通太阳镜一样在任何地方随时佩戴福来鹰太阳镜。微薄的镜腿可以保证您在佩戴头盔和头戴式耳机时的舒适感。', '产品颜色', '<p>亮黑、暗黑（亚光黑）</p>', '1527073328.png;1527073330.png', '2018-05-23 19:02:43', '0', null);
INSERT INTO `yx_accessories` VALUES ('8', '适用于霍克鹰框架的镜片', '$12', '1527073395.png', '独特、可重复使用且能静态紧贴是该护目镜的特点，并且可以为您定制适合Hawk鹰框架的Flying Eyes太阳镜。该款太阳镜可以让您摆脱老式护目镜的不适感。护目镜配有黑色和白色款。白色护目镜虽不透光，但是却比黑色护目镜涵盖更多的环绕光。两款眼镜功能同样，可根据个人喜好选用。 ', '产品使用方法', '<p>首次使用时，将它们从可重复使用的背衬中取出并沿着所需的线条切割出您选择的线段高度。然后将它们放在您的飞行眼镜上，以阻挡仪表板外的所有无关视野。当你需要再次拥有完整的视野时，只需按动扣钮即可将其卸下，不会留下任何残留物，并且可以将其粘在驾驶舱窗口，方便您到达地面后妥善收藏。</p>', '1527073395.png;1527073398.png;1527073399.png', '2018-05-23 19:03:50', '0', null);
INSERT INTO `yx_accessories` VALUES ('9', '纯灰色镜片', '$39', '1527073627.png', '中性灰色着色可以真实再现整个色谱，所以他最适合查看图表、地图和液晶显示屏。灰色着色的作品和棕色着色一样可以阻挡眩光并降低日光的亮度。', '更多细节', '<p>适配镜框：库伯、金鹰运动、霍克鹰、红隼、翠鸟</p>', '1527073627.png;1527073629.png', '2018-05-23 19:07:37', '0', null);
INSERT INTO `yx_accessories` VALUES ('10', '渐变灰', '$44', '1527073688.png', '当您在汽车或驾驶舱内时，这款渐变灰非处方双焦镜片为您提供极好的观看效果。它们轻微的渐变在顶部较暗，而向底部稍微淡一点的色调可以阻挡强烈的阳光，同时还可以更轻松地查看阴影部分的仪表盘。\n该款镜片是由高质量的聚碳酸酯材料制成成，并覆盖有防刮涂层。与所有福来鹰镜片一样，均提供UV400保护，这意味着它们可以阻挡100％的紫外线。均为非偏光镜片，因此不用担心对液晶显示屏的取像带来干扰。', '更多细节', '<p>适配镜框：库伯、金鹰运动、霍克鹰、红隼、翠鸟</p>', '1527073688.png;1527073691.png', '2018-05-23 19:08:53', '0', null);
INSERT INTO `yx_accessories` VALUES ('11', '偏光灰镜片', '$68', '1527073766.png', '该款偏光镜片非常适合水上和雪上运动，因为它们能阻挡来自其他角度的可见光，例如地面上的水或雪的反光。\n此外，这款镜片是由高质量的聚碳酸酯材料制成，具有很高的抗冲击性。除了覆盖有普通的防刮涂层，还覆盖有疏水和疏油涂层，这意味着这款镜片不仅防水，而且还能隔离雾和油。\n与所有福来鹰镜片一样，均提供UV400保护，这意味着它们可以阻挡100％的紫外线。如果您平时工作需要使用液晶显示屏，我们并不建议您使用偏光镜片。', '更多细节', '<p>适配镜框：金鹰运动、霍克鹰、翠鸟</p>', '1527073766.png;1527073769.png', '2018-05-23 19:09:56', '0', null);
INSERT INTO `yx_accessories` VALUES ('12', '非处方渐变灰双焦镜片', '$48', '1527073830.png', '当您在汽车或驾驶舱内时，这款渐变灰非处方双焦镜片为您提供极好的观看效果。它们轻微的渐变在顶部较暗，而向底部稍微淡一点的色调可以阻挡强烈的阳光，同时还可以更轻松地查看阴影部分的仪表盘。\n我们提供两种不同的双焦阅读器高度。高视角的双焦镜头可让您无需抬头即可轻松地查看前方的仪表盘。低视角的双焦镜头可以在更远的距离查看物体。\n该款镜片是由高质量的聚碳酸酯材料制成成，并覆盖有防刮涂层。与所有福来鹰镜片一样，均提供UV400保护，这意味着它们可以阻挡100％的紫外线。均为非偏光镜片，因此不用担心对液晶显示屏的取像带来干扰。', '更多细节', '<p>镜片选择：</p> <p>高倍+1.5、+2.0、+2.5、</p> <p>低倍+1.5、+2.0、+2.5</p> <p></p> <p>适配镜框：金鹰运动款、霍克鹰款</p>', '1527073830.png;1527073834.png', '2018-05-23 19:11:21', '0', null);
INSERT INTO `yx_accessories` VALUES ('13', '非处方纯灰双焦镜片', '$48', '1527073903.png', '这款纯灰色非处方双焦镜片具有出色的清晰度。它们是高质量的聚碳酸酯材料制成，并覆盖防刮涂层。与所有福来鹰镜片一样，均提供UV400保护，这意味着它们可以阻挡100％的紫外线。均为非偏光镜片，因此不用担心对液晶显示屏的取像带来干扰。', '更多细节', '<p>镜片选择：</p> <p>高倍+1.5、+2.0、+2.5、+3.0、+3.5</p> <p>低倍+1.5、+2.0、+2.5</p> <p></p> <p>适配镜框：霍克鹰款式</p>', '1527073903.png;1527073905.png', '2018-05-23 19:12:25', '0', null);
INSERT INTO `yx_accessories` VALUES ('14', '透明双焦镜片', '$48', '1527073969.png', '我们的这款透明双焦镜片是由高质量且耐冲击的聚碳酸酯制成。双焦阅读器的高度比其他大多数双焦阅读器高，是为了便于佩戴者查看诸如飞机仪表板之类的东西。而且，我们的透明镜片具有100％的UV400保护作用！', '更多细节', '<p>放大倍数：+1.5、+2.0</p> <p>适配镜框：霍克鹰款式</p>', '1527073969.png;1527073972.png', '2018-05-23 19:13:34', '0', null);

-- ----------------------------
-- Table structure for yx_news
-- ----------------------------
DROP TABLE IF EXISTS `yx_news`;
CREATE TABLE `yx_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `headImg` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `txt` varchar(10240) DEFAULT NULL,
  `addTime` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yx_news
-- ----------------------------
INSERT INTO `yx_news` VALUES ('1', '新闻测试', 'greg', '产品预告', '1524731056.jpg', '一条新闻测试', '<p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p>', '2018-04-26 16:24:46', '0');
INSERT INTO `yx_news` VALUES ('2', '新闻测试2', 'greg', '产品预告', '1524731056.jpg', '一条新闻测试', '<p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p>', '2018-04-26 16:24:49', '0');
INSERT INTO `yx_news` VALUES ('3', '新闻测试3', 'greg', '产品预告', '1524731056.jpg', '一条新闻测试', '<p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p>', '2018-04-26 16:24:50', '0');
INSERT INTO `yx_news` VALUES ('4', '新闻测试4', 'greg', '产品预告', '1524731056.jpg', '一条新闻测试', '<p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p>', '2018-04-26 16:24:51', '0');
INSERT INTO `yx_news` VALUES ('5', '新闻测试5', 'greg', '产品预告', '1524731056.jpg', '一条新闻测试', '<p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p>', '2018-04-26 16:24:55', '0');
INSERT INTO `yx_news` VALUES ('6', '新闻测试6', 'greg', '产品预告', '1524731056.jpg', '一条新闻测试', '<p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p>', '2018-04-26 16:24:55', '0');
INSERT INTO `yx_news` VALUES ('7', '新闻测试7', 'greg', '产品预告', '1524731056.jpg', '一条新闻测试', '<p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p>', '2018-04-26 16:24:55', '0');
INSERT INTO `yx_news` VALUES ('8', '新闻测试8', 'greg', '产品预告', '1524731056.jpg', '一条新闻测试', '<p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p>', '2018-04-26 16:24:55', '0');
INSERT INTO `yx_news` VALUES ('9', '新闻测试9', 'greg', '产品预告', '1524731056.jpg', '一条新闻测试', '<p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p> <p>一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试，一条新闻测试</p>', '2018-04-26 16:24:55', '0');

-- ----------------------------
-- Table structure for yx_products
-- ----------------------------
DROP TABLE IF EXISTS `yx_products`;
CREATE TABLE `yx_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `doller` varchar(255) DEFAULT NULL,
  `rmb` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `altImg` varchar(255) DEFAULT NULL,
  `txt` varchar(255) DEFAULT NULL,
  `describe` varchar(5000) DEFAULT NULL,
  `trait` varchar(5000) DEFAULT NULL,
  `detail` varchar(5000) DEFAULT NULL,
  `imgs` varchar(2048) DEFAULT NULL,
  `addTime` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yx_products
-- ----------------------------
INSERT INTO `yx_products` VALUES ('7', '折叠款霍克鹰非处方双光太阳镜', '￥1215.00', '1100', 'xxx', '1527145282.png', null, '<p>当你佩戴头盔或航空式耳机时，霍克鹰（Hawk）太阳镜也能为您提供极致的舒适感。ComfortPro系列太阳镜由柔性聚合物制成，并包含可互换的镜腿。此外， 仅1毫米厚的镜腿及其灵活性确保您在佩戴头盔或航空式耳机时不会产生任何不适感。更重要的是，它可以免除您在配戴耳机时担心噪音渗入的顾虑。</p> <p>每副霍克鹰ComfortPro系列的框架均包括三组镜腿选项。镜腿可以根据使用环境的不同做相应的调整：日常使用的是标准镜腿；佩戴头盔时，则使用的是微薄镜腿；而当您佩戴航空式耳机，则为您提供具有极致舒适性的简易束带。福来鹰专注于制造精密的聚碳酸酯镜片，为您提供无与伦比的清晰度和超强的防碎性能。这些非Rx（非处方）双焦点镜头具有+1.50至+3.50的各种强度。渐变灰色和纯灰色色调是其主打的两款类型。每套福来鹰眼镜都配有保护套和柔软的超细纤维清洁布/包，且所有款福来鹰眼镜处方兼容。</p>', '<li>三种类型的镜腿之间可以自由转换</li> <li>佩戴头戴式耳机时，非弹性的表带和扣带不会给您带来任何不适感</li> <li>微薄的镜腿，为您在佩戴头盔或头戴式耳机时提供极致舒适性能</li> <li>配有日常使用的标准镜腿</li> <li>环抱式的设计为您提供宽阔的视野</li> <li>框架轻便，为您提供极致的舒适感</li> <li>可自由调节的柔软鼻托可以帮助您调整眼镜放置的位置，为您提供最佳贴合性和舒适感</li> <li>防碎聚碳酸酯镜片，100％UV400防辐射保护</li> <li>非处方双焦太阳镜有两种取景高度:</li> <li>高倍双焦镜片的取景器部分距离镜片底部16毫米，无需移动头部即可拥有宽阔的视野</li> <li>低倍双焦镜片的取景器部分距离镜片底部11毫米，更适合年长一些的客户使用</li>', '<li>镜框尺寸：宽130毫米</li> <li>镜片尺寸：宽54毫米，高35毫米（56mm*37mm）</li> <li>镜框材质：先进的聚合物</li> <li>镜片材质：UV400聚碳酸酯镜片; 耐冲击</li>', '1527145282.png;1527145285.png;1527145288.png;1527145291.png', '2018-05-24 15:04:06', '0');
INSERT INTO `yx_products` VALUES ('8', '霍克鹰折叠款', '￥1247.00', '', '', '1527145513.png', null, '<p>当你佩戴头盔或航空式耳机时，霍克鹰（Hawk）太阳镜也能为您提供极致的舒适感。ComfortPro系列太阳镜由柔性聚合物制成，并包含可互换的镜腿。此外， 仅1毫米厚的镜腿及其灵活性确保您在佩戴头盔或航空式耳机时不会产生任何不适感。更重要的是，它可以免除您在配戴耳机时担心噪音渗入的顾虑。</p> <p>每副霍克鹰ComfortPro系列的框架均包括三组镜腿选项。镜腿可以根据使用环境的不同做相应的调整：日常使用的是标准镜腿；佩戴头盔时，则使用的是微薄镜腿；而当您佩戴航空式耳机，则为您提供具有极致舒适性的简易束带。福来鹰专注于制造精密的聚碳酸酯镜片，为您提供无与伦比的清晰度和超强的防碎性能。渐变灰色和纯灰色色调是其主打的两款类型。每套福来鹰眼镜都配有保护套和柔软的超细纤维清洁布/包，且所有款福来鹰眼镜处方兼容。</p>', '<li>三种类型的镜腿之间可以自由转换</li> <li>佩戴头戴式耳机时，非弹性的表带和扣带不会给您带来任何不适感</li> <li>微薄的镜腿，为您在佩戴头盔或头戴式耳机时提供极致舒适性能</li> <li>配有日常使用的标准镜腿</li> <li>环抱式的设计为您提供宽阔的视野</li> <li>框架轻便，不易破碎</li> <li>可自由调节的柔软鼻托可以帮助您调整眼镜放置的位置，为您提供最佳贴合性和舒适感</li> <li>光学校正，防碎聚碳酸酯镜片，100％UV400防辐射保护</li>', '<li>镜框尺寸：宽130毫米</li> <li>镜片尺寸：宽54毫米，高57毫米（56mm*37mm）</li> <li>镜框材质：先进的聚合物</li> <li>镜片材质：UV400聚碳酸酯镜片; 耐冲击</li> <li>镜片分类：</li> <li>亮色</li> <li>亚光色</li> <li>眼镜盒分类：</li> <li>三角盒</li> <li>拉链式太阳镜盒</li>', '1527145513.png;1527145515.png;1527145516.png;1527145518.png', '2018-05-24 15:06:18', '0');
INSERT INTO `yx_products` VALUES ('9', '霍克鹰非处方双焦折叠款', '￥1183.00', '1100', '测试型号', 'jy1.png', null, '<p>当你佩戴头盔或航空式耳机时，金鹰运动（Golden Eagle Sport）款太阳镜也能为您提供极致的舒适感。舒适系列太阳镜的的镜框和镜腿是由Resilamide™标准材质制作而成------这种材料主要用于航空航天领域。正是这种昂贵的聚合物材料才使得镜框有良好的延展性，轻便耐磨，不易折断。此外， 仅1毫米厚的镜腿及其灵活性确保您在佩戴头盔或航空式耳机时不会产生任何不适感。更重要的是，它可以免除您在配戴耳机时担心噪音渗入的顾虑。</p> <p>福来鹰（FlyingEyes）专注于制造精密的聚碳酸酯镜片，为您提供无与伦比的清晰度和超强的防碎性能。</p> <p>此外，这些非处方（RX）双焦透镜的强度范围为+1.50到+2.00。</p>', '<li>仅1mm粗的Resilamide™材质的镜腿为您提供极致的舒适性和全面的功能性</li> <li>航空级钛金属框架为这款眼镜赋予了极佳的轻便性，坚韧的强度及持久的耐用性</li> <li>防辐射聚碳酸酯安全镜片，具有100％UV400保护效果，在您外出享受大自然和进行运动的时为您的眼镜保驾护航</li> <li>环抱式风格为您提供最佳视野，在体育活动中为您助力。</li> <li>可自由调节的柔软鼻托可以帮助您调整眼镜放置的位置，为您提供最佳贴合性和舒适感</li> <li>双焦镜头的镜头放大器/取景器部分距离镜头底部15毫米，您无需移动即可将远处的景色尽收眼底。</li>', '<li>镜框尺寸：宽133毫米</li> <li>镜片尺寸：宽62毫米，高34毫米（62mm*34mm）</li> <li>镜框（正面）材质：钛银</li> <li>镜腿材质：1毫米粗的亮黑色Resilamide™材质</li> <li>镜片材质：UV400聚碳酸酯镜片; 耐冲击</li> <li>Frame（镜框）分类：</li> <li>Glossy Black</li> <li>Matte Black</li> <li>Tortoise（玳瑁）</li> <li>Lens（镜片）分类：</li> <li>Gradient Gray Tint</li> <li>Strength（分类）：</li> <li>+1.5</li> <li>+2.0</li> <li>Case（眼镜盒）分类：</li> <li>Floding Hard Case（三角盒）</li> <li>Zippered Hard Case（拉链式）</li>', 'jy1.png;jy2.png;jy3.png;jy4.png;jy5.png;jy8.png;jy6.png;jy7.png', '2018-04-26 13:43:15', '0');
INSERT INTO `yx_products` VALUES ('10', '金雕运动款', '￥1183.00', '1100', '测试型号', 'jy1.png', null, '<p>当你佩戴头盔或航空式耳机时，金鹰运动（Golden Eagle Sport）款太阳镜也能为您提供极致的舒适感。舒适系列太阳镜的的镜框和镜腿是由Resilamide™标准材质制作而成------这种材料主要用于航空航天领域。正是这种昂贵的聚合物材料才使得镜框有良好的延展性，轻便耐磨，不易折断。此外， 仅1毫米厚的镜腿及其灵活性确保您在佩戴头盔或航空式耳机时不会产生任何不适感。更重要的是，它可以免除您在配戴耳机时担心噪音渗入的顾虑。</p> <p>福来鹰（FlyingEyes）专注于制造精密的聚碳酸酯镜片，为您提供无与伦比的清晰度和超强的防碎性能。</p> <p>每套福来鹰眼镜都配有自己的保护套和柔软的超细纤维清洁布/包，适用于福来鹰系列所有处方太阳镜。</p>', '<li>仅1mm粗的Resilamide™材质的镜腿为您提供极致的舒适性和全面的功能性</li> <li>防紫外线聚碳酸酯安全镜片，具有UV400防护功能，在您外出旅行或参加运动时为您的眼睛保驾护航。</li> <li>环抱式风格为您提供最佳视野，在体育活动中为您助力。</li> <li>可自由调节的柔软鼻托可以帮助您调整眼镜放置的位置，为您提供最佳贴合性和舒适感</li> <li>有偏光镜片可供选择。</li>', '<li>镜框尺寸：宽133毫米</li> <li>镜片尺寸：宽62毫米，高34毫米（62mm*34mm）</li> <li>镜框（正面）材质：钛银</li> <li>镜腿材质：1毫米粗的亮黑色Resilamide™材质</li> <li>镜片材质：UV400聚碳酸酯镜片; 耐冲击</li> <li>Frame（镜框）分类：</li> <li>Glossy Black</li> <li>Matte Black</li> <li>Tortoise（玳瑁）</li> <li>Lens（镜片）分类：</li> <li>Gradient Copper</li> <li>Solid Gray Tint</li> <li>Gradient Gray Tint</li> <li>Polarized Gray Tint</li> <li>Case（眼镜盒）分类：</li> <li>Floding Hard Case（三角盒）</li> <li>Zippered Hard Case（拉链式）</li>', 'jy1.png;jy2.png;jy3.png;jy4.png;jy5.png;jy6.png;jy7.png', '2018-04-26 13:41:32', '0');
INSERT INTO `yx_products` VALUES ('11', '霍克鹰宽边框款', '￥1953.00', '1100', '系列', 'hk1.png', null, '<p>福来鹰（Flying Eyes）系列Cooper Titanium（库伯）款飞行员式太阳镜的设计非常贴心，即使当您配戴头盔或头戴式耳机时，极致的舒适感也不会有半分打折。作为舒适系列的一部分，其钛框架是由β钛和Resilamide™标准材质制成------一种主要用于航空航天的材料，轻便灵活，且不易损坏。</p> <p>当您佩戴头盔或头戴式耳机时，再也不用担心会忍受传统眼镜带来的疼痛或不适，因为这款眼镜的镜腿仅1mm厚，灵活方便，为您提供极致的舒适感。如果您佩戴降噪耳机，微薄的镜腿厚度，还可以减少甚至消除噪音渗入。</p> <p>福来鹰致力于精密的眼镜以及舒适的镜架工艺，它采用抗UV400耐冲击的聚碳酸酯镜片，具有无与伦比的清晰度和超强的耐冲击性。每套福来鹰眼镜都配有自己的保护套和柔软的超细纤维清洁布/包，适用于福来鹰系列所有处方太阳镜。</p>', '<li>专为头围略宽的客户群体设计</li> <li>仅1mm粗的Resilamide™材质的镜腿为您提供极致的舒适性和全面的功能性</li> <li>航空级钛金属框架为这款眼镜赋予了极佳的轻便性，坚韧的强度及持久的耐用性</li> <li>防碎耐冲击聚碳酸酯安全镜片，具有100％UV400保护效果，确保您的眼睛免受阳光和其他因素的伤害</li> <li>非处方双焦镜片和处方镜片可供选择</li> <li>可自由调节的柔软鼻托可以帮助您调整眼镜放置的位置，为您提供最佳贴合性和舒适感</li>', '<li>镜框尺寸：宽137毫米</li> <li>镜片尺寸：宽63毫米，高41毫米（63mm*41mm）</li> <li>镜框（正面）材质：钛银</li> <li>镜腿材质：1毫米粗的亮黑色Resilamide™材质</li> <li>镜片材质：UV400聚碳酸酯镜片; 耐冲击</li> <li>Lens（镜片）分类：</li> <li>Solid Gray Tint</li> <li>Case（眼镜盒）分类：</li> <li>Floding Hard Case（三角盒）</li> <li>Zippered Hard Case（拉链式）</li>', 'hk1.png;hk2.png;hk3.png', '2018-04-26 13:39:06', '0');
INSERT INTO `yx_products` VALUES ('12', '库伯系列', '￥1953.00', '1100', '测试型号', 'kb1.png', null, '<p>福来鹰（Flying Eyes）系列Cooper Titanium（库伯）款飞行员式太阳镜的设计非常贴心，即使当您配戴头盔或头戴式耳机时，极致的舒适感也不会有半分打折。作为舒适系列的一部分，其钛框架是由β钛和Resilamide™标准材质制成------一种主要用于航空航天的材料，轻便灵活，且不易损坏。</p> <p>当您佩戴头盔或头戴式耳机时，再也不用担心会忍受传统眼镜带来的疼痛或不适，因为这款眼镜的镜腿仅1mm厚，灵活方便，为您提供极致的舒适感。如果您佩戴降噪耳机，微薄的镜腿厚度，还可以减少甚至消除噪音渗入。</p> <p>Flying Eyes（福来鹰）致力于精密的眼镜以及舒适的镜架工艺，它采用抗UV400耐冲击的聚碳酸酯镜片，具有无与伦比的清晰度和超强的耐冲击性。每套Flying Eyes眼镜都配有自己的保护套和柔软的超细纤维清洁布/包，适用于福来鹰系列所有处方太阳镜。</p>', '<li>仅1mm粗的Resilamide™材质的镜腿为您提供极致的舒适性和全面的功能性</li> <li>航空级钛金属框架为这款眼镜赋予了极佳的轻便性，坚韧的强度及持久的耐用性</li> <li>防碎耐冲击聚碳酸酯安全镜片，具有100％UV400保护效果，确保您的眼睛免受阳光和其他因素的伤害</li> <li>可自由调节的柔软鼻托可以帮助您调整眼镜放置的位置，为您提供最佳贴合性和舒适感</li>', '<li>镜框尺寸：宽135毫米</li> <li>镜片尺寸：宽60毫米，高51毫米（60mm*51mm）</li> <li>镜框（正面）材质：钛银</li> <li>镜腿材质：1毫米粗的亮黑色Resilamide™材质</li> <li>镜片材质：UV400聚碳酸酯镜片; 耐冲击</li> <li>Lens（镜片）分类：</li> <li>Solid Gray Tint</li> <li>Gradient Gray Tint</li> <li>Case（眼镜盒）分类：</li> <li>Floding Hard Case（三角盒）</li> <li>Zippered Hard Case（拉链式）</li>', 'kb1.png;kb2.png;kb3.png;kb4.png', '2018-04-26 13:36:54', '0');
INSERT INTO `yx_products` VALUES ('13', '红隼系列', '￥1953.00', '1100', '测试型号', 'hs1.png', null, '<p>Flying Eyes设计的红隼款飞行员太阳镜专注于您在佩戴头盔时的舒适感。舒适系列太阳镜钛银框架是由β钛和Resilamide™标准材质制成------这种材料主要用于航空航天领域。正是这种昂贵的聚合物材料才使得镜框有良好的延展性，轻便耐磨，不易折断。</p> <p>由于镜腿的灵活性为您提供极致的舒适感，因此您不会感受到类似传统眼镜带来的疼痛或不适。此外， 仅1毫米厚的镜腿及其灵活性确保您在佩戴头盔或航空式耳机时不会产生任何不适感。更重要的是，它可以免除您在配戴耳机时担忧。</p> <p>Flying Eyes（福来鹰）致力于做精密的眼镜以及舒适的镜架，它采用抗UV400耐冲击的聚碳酸酯镜片，具有无与伦比的清晰度和超强的耐冲击性。每套Flying Eyes眼镜都配有自己的保护套和柔软的超细纤维清洁布/包，适用于福来鹰系列所有处方太阳镜。</p>', '<li>理想的外观</li> <li>仅1mm粗的Resilamide™材质的镜腿为您提供极致的舒适性和全面的功能性。</li> <li>防碎聚碳酸酯安全镜片以及100％UV400保护</li> <li>可自由调节的柔软鼻托可以帮助您调整眼镜放置的位置，为您提供最佳贴合性和舒适感</li>', '<li>镜框尺寸：宽130毫米</li> <li>镜片尺寸：宽58毫米，高45毫米（58mm*45mm）</li> <li>镜框（正面）材质：钛银</li> <li>镜腿材质：1毫米粗的亮黑色Resilamide™材质</li> <li>镜片材质：UV400聚碳酸酯镜片; 耐冲击</li><li>Lens（镜片）分类：</li>\r\n<li>Solid Gray Tint</li>\r\n<li>Gradient Gray Tint</li>\r\n<li>Case（眼镜盒）分类：</li>\r\n<li>Floding Hard Case（三角盒）</li>\r\n<li>Zippered Hard Case（拉链式）</li>', 'hs1.png;hs2.png;hs3.png', '2018-04-26 13:34:20', '0');
INSERT INTO `yx_products` VALUES ('14', '翠鸟系列', '￥1043.00', '1100', 'YVT90030', 'cn1.png', null, '<p>当你佩戴头盔或航空式耳机时，翠鸟（Kingfisher）太阳镜也能为您提供极致的舒适感。舒适系列太阳镜的的镜框和镜腿是由Resilamide™标准材质制作而成------这种材料主要用于航空航天领域。正是这种昂贵的聚合物材料才使得镜框有良好的延展性，轻便耐磨，不易折断。此外， 仅1毫米厚的镜腿及其灵活性确保您在佩戴头盔或航空式耳机时不会产生任何不适感。更重要的是，它可以免除您在配戴耳机时担心噪音渗入的顾虑。</p> <p>FlyingEyes（福来鹰）专注于制造精密的聚碳酸酯镜片，为您提供无与伦比的清晰度和超强的防碎性能。</p> <p>每套Flying Eyes眼镜都配有自己的保护套和柔软的超细纤维清洁布/包，适用于福来鹰系列所有处方太阳镜。</p>', '<li>仅1mm粗的Resilamide™材质的镜腿为您提供极致的舒适性和全面的功能性。</li> <li>防碎聚碳酸酯安全镜片以及100％UV400保护</li> <li>多种色调的镜片可供选择</li> <li>可自由调节的柔软鼻托可以帮助您调整眼镜放置的位置，为您提供最佳贴合性和舒适感</li> <li>有偏光镜片可供选择。</li>', '<li>镜框尺寸：宽135毫米</li> <li>镜片尺寸：宽56毫米，高37毫米（56mm*37mm）</li> <li>镜框材质：Resilamide™</li> <li>镜腿材质：Resilamide™</li> <li>镜片材质：UV400聚碳酸酯镜片; 耐冲击</li><li>Frame（镜框）分类：</li>\r\n<li>Glossy Black</li>\r\n<li>Matte Black</li>\r\n<li>Satin Blue</li>\r\n<li>Satin Red</li>\r\n<li>Satin White</li>\r\n<li>Tortoise（玳瑁）</li>\r\n<li>Lens（镜片）分类：</li>\r\n<li>Gradient Copper</li>\r\n<li>Mirrored Copper</li>\r\n<li>Solid Copper</li>\r\n<li>Solid Gray</li>\r\n<li>Gradient Gray Tint</li>\r\n<li>Polarized Gray Tint</li>\r\n<li>Case（眼镜盒）分类：</li>\r\n<li>Floding Hard Case（三角盒）</li>\r\n<li>Zippered Hard Case（拉链式）</li>', 'cn1.png;cn2.png;cn3.png;cn4.png;cn5.png;cn6.png;cn7.png;cn8.png;cn9.png;cn10.png;cn11.png;cn12.png;cn13.png;cn14.png', '2018-04-26 13:04:45', '0');
