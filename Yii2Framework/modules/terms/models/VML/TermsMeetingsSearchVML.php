<?php
namespace app\modules\terms\models\VML;
use Yii;
use yii\base\Model;
class TermsMeetingsSearchVML extends Model {
    public $term_id;
    public $teacher_id;
    public $date;
    public $terms = [];
    public $teachers = [];
    public function rules() {
        return [
                [['term_id', 'teacher_id'], 'integer'],
                [['date'], 'safe'],
        ];
    }
    public function attributeLabels() {
        return [
            'term_id' => Yii::t('terms', 'Term ID'),
            'teacher_id' => Yii::t('terms', 'Teacher ID'),
            'date' => Yii::t('terms', 'Date'),
        ];
    }
}