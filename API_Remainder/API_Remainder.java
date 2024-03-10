import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/api/reminders")
public class ReminderController {

    @Autowired
    private ReminderRepository reminderRepository;  

    @PostMapping
    public ResponseEntity<String> createReminder(@RequestBody ReminderRequest reminderRequest) {
      
        String date = reminderRequest.getDate();
        String time = reminderRequest.getTime();
        String message = reminderRequest.getMessage();
        String reminderType = reminderRequest.getReminderType();  

        
        Reminder reminder = new Reminder(date, time, message, reminderType, LocalDateTime.now());
        reminderRepository.save(reminder);

        return new ResponseEntity<>("Reminder created successfully", HttpStatus.CREATED);
    }
}
