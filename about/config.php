<?php
/**
 * Created by PhpStorm.
 * User: ericzhou
 * Date: 2016/10/20
 * Time: 19:40
 */

$fruits_ico_path="/images/";
$config = array();

$config['common']['website']['title']       = "木娃果园";
$config['common']['website']['note']        = "致我爱吃水果的木娃宝宝";
$config['common']['website']['meta']['description']         = "陕西水果大全";
$config['common']['website']['meta']['keywords']            = "陕西水果大全";

//db链接信息 begin
$config['common']['db']['name']             = "mwgy";
$config['common']['db']['host']             = "localhost";
$config['common']['db']['port']             = "3306";
$config['common']['db']['user_id']          = "root";
$config['common']['db']['password']         = "eric@wendy";
//db链接信息 end

$config['fruits']['dongzao']['name']        = "大荔冬枣";
$config['fruits']['dongzao']['ico']         = $fruits_ico_path."dongzao.png";
$config['fruits']['dongzao']['description'] = "天下奇果、百果王、活维生素丸";
$config['fruits']['dongzao']['memo']        = "享有“南荔枝，北冬枣，百果王”的盛名。平均单果重17.5g，最大单果重可达25g，状如苹果，有“小苹果”之称。";

$config['fruits']['xigua']['name']          = "大荔西瓜";
$config['fruits']['xigua']['ico']           = $fruits_ico_path."dalixigua.png";
$config['fruits']['xigua']['description']   = "瓜中之王";
$config['fruits']['xigua']['memo']          = "富含维生素A、Bl、B2、C，葡萄糖、蔗糖、果糖、苹果酸、谷氨酸和精氨酸等，有清热解暑、利小便、降血压的功效。 ";

$config['fruits']['hamigua']['name']        = "哈密瓜";
$config['fruits']['hamigua']['ico']         = $fruits_ico_path."hamigua.png";
$config['fruits']['hamigua']['description'] = "绵软多汁、甜爽而又醇香";
$config['fruits']['hamigua']['memo']        = "哈密瓜（学名：Cucumis melo var. saccharinus），是甜瓜的一个转变。又名雪瓜、贡瓜，是一类优良甜瓜品种，果型圆形或卵圆形，出产于新疆";

$config['fruits']['youtao']['name']         = "油桃";
$config['fruits']['youtao']['ico']          = $fruits_ico_path."youtao.png";
$config['fruits']['youtao']['description']  = "又名桃驳李，普通桃的变种";
$config['fruits']['youtao']['memo']         = "香、甜、脆一应俱全。油桃风味浓甜（含糖极高），十分适合中国人喜甜的饮食习惯；香味浓郁，清香可口；肉质细脆，爽口异常，甜而不腻。";

$config['fruits']['pingguo']['name']        = "苹果";
$config['fruits']['pingguo']['ico']         = $fruits_ico_path."pingguo.png";
$config['fruits']['pingguo']['description'] = "美容佳品，既能减肥，又可使皮肤润滑柔嫩";
$config['fruits']['pingguo']['memo']        = "苹果的性味温和，含有丰富的碳水化合物、维生素和微量元素，是所有蔬果中营养价值最接近完美的一个。";

return $config;