<?php
if (isset($_POST['id'],$_POST['towards']))
{
    include 'includes/config.php';
    $output = '';
    if ($_POST['towards'] === 'right')
    {
        $query=$conn->prepare("SELECT * FROM images");
        $query->execute();
        $rows=$query->fetchall(PDO::FETCH_ASSOC);
        $countAll=count($rows);

        $query=$conn->prepare("SELECT * FROM images WHERE id<?");
        $query->execute([$_POST['id']]);
        $rows=$query->fetchall(PDO::FETCH_ASSOC);
        $number=count($rows)+2;

        $query=$conn->prepare("SELECT * FROM images WHERE id>? LIMIT 1");
        $query->execute([$_POST['id']]);
        $rows=$query->fetchall(PDO::FETCH_ASSOC);
        $count=count($rows);

        if($count !==0)
        {
            $output .='
                <div class="show-image">
                    <a href="uploads/'.$rows[0]['image_url'].'" target="_blank">
                        <img class="imageList" src="uploads/'.$rows[0]['image_url'].'" id="'.$rows[0]['id'].'" alt="'.$rows[0]['image_url'].'">
                    </a>
                    <div class="switcher">
                        <span class="right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        <span class="left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                        <span class="center">'.$number.'/'.$countAll.'</span>
                    </div>
                </div>
            ';
        }
        else
        {
            $query=$conn->prepare("SELECT * FROM images");
            $query->execute();
            $rows=$query->fetchall(PDO::FETCH_ASSOC);
            $countAll=count($rows);

            $query=$conn->prepare("SELECT * FROM images WHERE id<?");
            $query->execute([0]);
            $rows=$query->fetchall(PDO::FETCH_ASSOC);
            $number=count($rows)+1;

            $query=$conn->prepare("SELECT * FROM images WHERE id>? LIMIT 1");
            $query->execute([0]);
            $rows=$query->fetchall(PDO::FETCH_ASSOC);
            $count=count($rows);

            $output .='
                <div class="show-image">
                    <a href="uploads/'.$rows[0]['image_url'].'" target="_blank">
                        <img class="imageList" src="uploads/'.$rows[0]['image_url'].'" id="'.$rows[0]['id'].'" alt="'.$rows[0]['image_url'].'">
                    </a>
                    <div class="switcher">
                        <span class="right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        <span class="left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                        <span class="center">'.$number.'/'.$countAll.'</span>
                    </div>
                </div>
            ';
        }
    }
    elseif ($_POST['towards'] === 'left')
    {
        $query=$conn->prepare("SELECT * FROM images");
        $query->execute();
        $rows=$query->fetchall(PDO::FETCH_ASSOC);
        $countAll=count($rows);

        $query=$conn->prepare("SELECT * FROM images WHERE id<?");
        $query->execute([$_POST['id']]);
        $rows=$query->fetchall(PDO::FETCH_ASSOC);
        $number=count($rows);

        $query=$conn->prepare("SELECT * FROM images WHERE id<? ORDER BY id DESC LIMIT 1");
        $query->execute([$_POST['id']]);
        $rows=$query->fetchall(PDO::FETCH_ASSOC);
        $count=count($rows);


        if($count !==0)
        {
            $output .='
                <div class="show-image">
                    <a href="uploads/'.$rows[0]['image_url'].'" target="_blank">
                        <img class="imageList" src="uploads/'.$rows[0]['image_url'].'" id="'.$rows[0]['id'].'" alt="'.$rows[0]['image_url'].'">
                    </a>
                    <div class="switcher">
                        <span class="right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        <span class="left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                        <span class="center">'.$number.'/'.$countAll.'</span>
                    </div>
                </div>
            ';
        }
        else
        {
            $query=$conn->prepare("SELECT * FROM images");
            $query->execute();
            $rows=$query->fetchall(PDO::FETCH_ASSOC);
            $countAll=count($rows);

            $number=$countAll;

            $query=$conn->prepare("SELECT * FROM images ORDER BY ID DESC LIMIT 1");
            $query->execute();
            $rows=$query->fetchall(PDO::FETCH_ASSOC);
            $count=count($rows);

            $output .='
                <div class="show-image">
                    <a href="uploads/'.$rows[0]['image_url'].'" target="_blank">
                        <img class="imageList" src="uploads/'.$rows[0]['image_url'].'" id="'.$rows[0]['id'].'" alt="'.$rows[0]['image_url'].'">
                    </a>
                    <div class="switcher">
                        <span class="right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        <span class="left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                        <span class="center">'.$number.'/'.$countAll.'</span>
                    </div>
                </div>
            ';
        }
    }
    else
    {
        $output = 'false';
    }

    sleep(1);
    echo $output;
}
else
{
    header('location:index.php');
}