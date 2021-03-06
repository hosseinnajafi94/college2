<?php
namespace app\modules\terms\models\VML;
use Yii;
use yii\base\Model;
class TermsStudentsSearchVML extends Model {
    public $term_id;
    public $student_id;
    public $register_date;
    public $class_price;
    public $book_price;
    public $terms = [];
    public $students = [];
    public function rules() {
        return [
                [['term_id', 'student_id', 'class_price', 'book_price'], 'integer'],
                [['register_date'], 'safe'],
        ];
    }
    public function attributeLabels() {
        return [
            'term_id' => Yii::t('terms', 'Term ID'),
            'student_id' => Yii::t('terms', 'Student ID'),
            'register_date' => Yii::t('terms', 'Register Date'),
            'class_price' => Yii::t('terms', 'Class Price'),
            'book_price' => Yii::t('terms', 'Book Price'),
        ];
    }
}