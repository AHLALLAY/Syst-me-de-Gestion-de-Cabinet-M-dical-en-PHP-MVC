<?php
require_once 'Database.php';

class Appointment{

    public function addAppointment($patient, $doctor, $specialite){
        $db = Database::getInstance();
        $conn = $db->getConnection();

        try {
            $stmt = $conn->prepare("INSERT INTO appointment (patient, doctor, specialite) 
                                   VALUES (:patient, :doctor, :specialite)");
            $stmt->bindParam(':patient', $patient);
            $stmt->bindParam(':doctor', $doctor);
            $stmt->bindParam(':specialite', $specialite);
            return $stmt->execute();
    
        } catch (PDOException $e) {
            echo "Erreur lors de la prise du rendez-vous : " . $e->getMessage();
        }
    }

    public function getAppointmentsByPatient($patientId)
    {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $stmt = $conn->prepare("SELECT a.app_date, u.f_name, u.l_name, u.speciality
                                FROM appointment a 
                                JOIN users u ON a.doctor = u.user_id
                                WHERE patient = :patient");
        $stmt->bindValue(':patient', $patientId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAppointmentsByDoctor($doctorId)
    {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $stmt = $conn->prepare("SELECT a.app_date, u.f_name, u.l_name
                                FROM appointment a 
                                JOIN users u ON a.patient = u.user_id
                                WHERE doctor = :doctor");
        $stmt->bindValue(':doctor', $doctorId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}