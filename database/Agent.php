<?php
require_once "connectdb.php";

require_once '../vendor/autoload.php';
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

class File {
    private function sendFileByEmail($filePath, $to, $subject, $body) {
        $mail = new PHPMailer(true);

        try {
            // Настройка параметров SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.mail.ru'; // Замените на ваш SMTP сервер
            $mail->SMTPAuth   = true;
            $mail->Username   = 'vimangulov2005@mail.ru'; // Ваш логин
            $mail->Password   = 'xPU14Ktaqc7zsqxgfhi6'; // Ваш пароль
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
    
            // Получатель письма
            $mail->setFrom('vimangulov2005@mail.ru', 'Mailer');
            $mail->addAddress($to, 'vimangulov2005@mail.ru');
    
            // Загрузка файла
            $mail->addAttachment($filePath);

            // Компонент "HTML"
            $mail->isHTML(true);

            // Установка кодировки UTF-8 для темы письма
            $mail->CharSet = 'UTF-8'; 
            $mail->Encoding = 'base64';

            // Явное указание кодировки для тела письма
            $mail->ContentType = 'text/html; charset=utf-8';

            // Корпус письма
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body); // Альтернативный текст без HTML
    
            // Отправка письма
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    public function file_add($ins_name, $FIO, $price, $valid_period, $id_order) {
        // Создаем новый объект PhpWord
        $phpWord = new PhpWord();

        // Добавляем новую секцию
        $section = $phpWord->addSection();

        // Добавляем заголовок
        $section->addText('ДОГОВОР ЛИЧНОГО СТРАХОВАНИЯ ОТ НЕСЧАСТНЫХ СЛУЧАЕВ', ['name' => 'Consolas', 'size' => 14, 'bold' => true]);

        // Добавляем данные в секцию
        $data = [
            'Страховое лицо' => $FIO,
            'Название страхового полиса' => $ins_name,
            'Страховой платеж в размере' => $price.' рублей',
            'Срок действия договора' => $valid_period.' месяца(ев)'
        ];

        foreach ($data as $key => $value) {
            $section->addText($key.': '.$value, ['name' => 'Consolas', 'size' => 12]);
        }

        // Определяем путь для сохранения файла
        $savePath = '../files_insurance/ins'.$id_order.'.docx';

        // Сохраняем документ
        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($savePath);
        $message = "Ваша заявка на оформление полиса '$ins_name' успешно одобрена. Документ прикреплен.";
        // echo "Документ сохранен по пути: $savePath\n";

        $this->sendFileByEmail($savePath, "vimangulov2005@mail.ru", "Заявка #1111", $message);
    }
    
}
class Agent extends Connect {
    protected $id;

    protected $ins_name;

    protected $ins_price;

    protected $cat_id;

    protected $descr;

    protected $valid_period;

    protected $check;

    protected $check_update = false;

    // public function add_insurance($ins_name, $ins_price, $cat_id, $descr) {
    //     $query = "SELECT * FROM `insurance` WHERE `insurance_name` = '$ins_name'";
    //     $this -> check = mysqli_query($this -> connection, $query);
    //     if(mysqli_num_rows($this->check) == 0) {
    //         $_SESSION["message"] = "Полис создан";
    //         return mysqli_query($this->connection, "INSERT INTO `insurance`(`insurance_name`, `price`, `category_id`, `description`) VALUES ('$ins_name','$ins_price','$cat_id','$descr')");
    //     } else {
    //         $_SESSION["message"] = "Ошибка добавления";
    //     }
    // }
    // public function update_insurance($id, $ins_name, $ins_price, $ins_amount, $cat_id, $descr, $valid_period) {
    //     $ins_amount = $ins_price * $valid_period;
    //     $query1 = mysqli_fetch_assoc(mysqli_query($this->connection, "SELECT * FROM `insurance` WHERE `insurance_id` = '$id'"));
    //     $query = "UPDATE `insurance` SET ";
    //     if ($query1["insurance_name"] != $ins_name) {
    //         $query .= " `insurance_name`='$ins_name', ";
    //         $this->check_update = true;
    //     }
    //     if ($query1["price"] != $ins_price) {
    //         $query .= " `price`= '$ins_price', ";
    //         $this->check_update = true;
    //     }
    //     if ($query1["insurance_amount"] != $ins_amount) {
    //         $query .= " `insurance_amount`='$ins_amount', ";
    //         $this->check_update = true;
    //     }
    //     if ($query1["category_id"] != $cat_id) {
    //         $query .= " `category_id`='$cat_id', ";
    //         $this->check_update = true;
    //     }
    //     if ($query1["description"] != $descr) {
    //         $query .= " `description`='$descr', ";
    //         $this->check_update = true;
    //     }
    //     if ($query1["validity_period"] != $valid_period) {
    //         $query .= " `validity_period`='$valid_period', ";
    //         $this->check_update = true;
    //     }

    //     if ($this->check_update) {
    //         $query = substr($query, 0, -2);
    //         $query .= " WHERE `insurance_id` = '$id'";
    //         $result = mysqli_query($this->connection, $query);
    //         if ($result) {
    //             return $_SESSION["message"] = "Данные обновленны";
    //         }
    //     } else {
    //         return $_SESSION["message"] = "Данные актуальны";
    //     }
    // }

    // public function orders_update($id_ins, $status, $ins_name, $FIO, $price, $valid_period, $id_order) {
    //     if($status == "Одобрена") {
    //         $query1 = mysqli_query($this->connection, "UPDATE `order` SET `status`= '$status' WHERE `insurance_id` = '$id_ins'");
    //         $text = 'Название полиса ' . "$ins_name" . "\n" . 'ФИО заказчика ' . "$FIO" . "\n" . 'Общая цена(в рублях) ' . "$price" . "\n" . 'Период страхования '  . $valid_period . ' месяца(ев)';
    //         $file_path = '../files_insurance/ins'. $id_order . '.docx';
    //         file_put_contents($file_path, $text);
    //         mail("vimangulov2005@mail.ru", "Заявка #1111", "Ваша заявка на оформление полиса '$ins_name' успешно одобренна!");
    //         return $query1;
    //     } else {
    //         $query1 = mysqli_query($this->connection, "UPDATE `order` SET `status`= '$status' WHERE `insurance_id` = '$id_ins'");
    //         mail("vimangulov2005@mail.ru", "Заявка #1111", "Ваша заявка на оформление полиса '$ins_name' к сожалению отклоненна!");
    //         return $query1;
    //     }
    // }
    public function orders_update($id_ins, $status, $ins_name, $FIO, $price, $valid_period, $id_order) {
    if($status == "Одобрена") {
        $query1 = mysqli_query($this->connection, "UPDATE `order` SET `status`= '$status' WHERE `insurance_id` = '$id_ins'");
        return $query1;
    } else {
        $query1 = mysqli_query($this->connection, "UPDATE `order` SET `status`= '$status' WHERE `insurance_id` = '$id_ins'");
        mail("vimangulov2005@mail.ru", "Заявка #1111", "Ваша заявка на оформление полиса '$ins_name' к сожалению отклоненна!");
        return $query1;
    }
}
}
?>