<?

namespace App\Controllers;

use App\Services\Router;
use App\Services\Helpers;


class Photos
{
    public static function delete($data)
    {

        unlink(realpath($data["path"]));
        $id = $data["id"];

        \R::hunt('photos', 'id = ?', [$id]);



        Router::Redirect("/photos");

        // die(__DIR__ . $data["path"]);
        // if (file_exists("")) {
        //     unlink($data["path"]);
        //     Router::Redirect("/photos");
        // } else {
        //     Router::error(500);
        // }
    }
    public static function send($data, $files)
    {
        $directory = "assets/images/portfolio/";
        $photo = $files["file"];
        $files = array_diff(scandir($directory), array('..', '.'));
        $files[] = sort($files);
        $filesname = [];
        $extension = pathinfo($photo["name"], PATHINFO_EXTENSION);

        foreach ($files as $file) {
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $filesname[] =  $filename;
        }
        asort($filesname);
        if (($key = array_search('1', $filesname)) !== false) {
            unset($filesname[$key]);
        }
        foreach ($filesname as $filename) {
            if (($key = array_search($filename + 1, $filesname)) === false) {
                $current = $filename + 1;
                $path = $directory . $current . "." . $extension;

                if (move_uploaded_file($photo["tmp_name"], $path)) {
                    $photo = \R::dispense('photos');
                    $photo->path = $path;
                    \R::store($photo);
                    Router::Redirect("/photos");
                } else {
                    Router::error(500);
                }
                break;
            }
        }
    }
    public static function edit($data, $files)
    {
        $oldPath = $data["oldpath"];
        $id = $data["Idphoto"];
        $photo = $files["file"];
        // die(str_replace('\\', '/', getcwd() . "/" . $oldPath));
        if (unlink(str_replace('\\', '/', getcwd() . "/" . $oldPath))) {
        } else {
        }

        move_uploaded_file($photo["tmp_name"], str_replace('\\', '/', $oldPath));



        // $path = $directory . $oldPath . "." . $extension;

        //
        Router::Redirect("/photos");
    }
}
