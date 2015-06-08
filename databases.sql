/* 
* @Author: kidjourney
* @Date:   2015-06-08 13:19:17
* @Last Modified by:   kidjourney
* @Last Modified time: 2015-06-08 14:39:58
*/
CREATE TABLE user (
    u_id int not null auto_increment primary key ,
    u_openid varchar(20) not null ,
    u_nick varchar(20) null ,
    u_info varchar(40) null 
)