<?php
class Activity
{

    public function setIntake($calories)
    {
        $_SESSION['calories'] = $calories;
        return "Asupan kalori sebesar {$calories} kalori telah disimpan.";
    }


    public function getActivityTarget()
    {
        if (!isset($_SESSION['calories'])) {
            return [
                "message" => "Asupan kalori belum disetel. Gunakan layanan setIntake terlebih dahulu."
            ];
        }

        $calories = $_SESSION['calories'];
        $targetActivity = $this->calculateActivity($calories);

        return [
            "calories" => $calories,
            "targetActivity" => $targetActivity,
            "message" => "Target aktivitas dihitung berdasarkan asupan kalori."
        ];
    }


    private function calculateActivity($calories)
    {
        if ($calories < 1500) {
            return "Jalan kaki 30 menit.";
        } elseif ($calories < 2000) {
            return "Jogging 20 menit.";
        } elseif ($calories < 2500) {
            return "Bersepeda 45 menit.";
        } else {
            return "Olahraga intensif selama 60 menit.";
        }
    }
}
