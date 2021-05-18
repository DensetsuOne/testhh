<?php 
$a = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, placeat quaerat magni magnam quia sapiente commodi nam rem eius natus explicabo necessitatibus 
sequi enim odio ea iure, illo est. Iure.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officiis esse velit totam eveniet minus iusto voluptatem blanditiis molestiae a ut, nihil
autem soluta sequi, quo dolores dignissimos quod perferendis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, placeat quaerat magni magnam quia sapiente commodi nam rem eius natus explicabo necessitatibus 
sequi enim odio ea iure, illo est. Iure.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officiis esse velit totam eveniet minus iusto voluptatem blanditiis molestiae a ut, nihil
autem soluta sequi, quo dolores dignissimos quod perferendis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, placeat quaerat magni magnam quia sapiente commodi nam rem eius natus explicabo necessitatibus 
sequi enim odio ea iure, illo est. Iure.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officiis esse velit totam eveniet minus iusto voluptatem blanditiis molestiae a ut, nihil
autem soluta sequi, quo dolores dignissimos quod perferendis?';
$link = '<a href="news.php">news</a>';
echo $link.'<br>';
$b = mb_strimwidth($a, 0, 180, '...');
echo $b.'<br>';
$b = explode(' ', $b);
$str1 = count($b)-1;
$str2 = count($b)-2;
$str1 = "<a href='news.php'>$b[$str1]</a>";
$str2 = "<a href='news.php'>$b[$str2]</a>";
$b = array_slice($b , 0 , count($b) - 2);
array_push($b , $str2, $str1);
$b = implode(' ', $b);
echo $b;