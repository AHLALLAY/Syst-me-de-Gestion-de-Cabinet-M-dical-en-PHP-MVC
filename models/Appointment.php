<?php
require_once 'Database.php';

class Appointment
{

    public function addAppointment($patient, $doctor, $specialite)
    {
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

        $stmt = $conn->prepare("SELECT a.specialite, a.statut, a.created_at, u1.user_id,
                                        concat(u1.f_name,' ', u1.l_name) as pateint,
                                        concat(u2.f_name,' ', u2.l_name) as doctor
                                        FROM appointment a
                                        JOIN users u1 ON a.patient = u1.user_id
                                        JOIN users u2 ON a.doctor = u2.user_id
                                        WHERE u1.user_id = :id");
        $stmt->bindValue(':id', $patientId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAppointmentsByDoctor($doctorId){
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
