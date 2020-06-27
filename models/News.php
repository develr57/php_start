<?php

class News
{

    /**
     * Returns single news item with specified id
     * @param integer $id
     */
    public static function getNewsItemById($id)
    {
        // Запрос к БД        
    }

    /**
     * Returns an array of news items
     */
    public static function getNewsList()
    {   
        $db = Db::getConnection();
        
        $newsList = array();
        
        $result = $db->query('SELECT id, title, date, short_content from news ORDER BY date DESC LIMIT 10');        

        $i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;
    }


}
