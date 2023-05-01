import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  selectedFile: File | null = null;
  message: string | null = null;

  constructor(private http: HttpClient) { }

  onFileSelected(event: Event) {
    const file = (event.target as HTMLInputElement).files?.[0];
    if (file) {
      this.selectedFile = file;
    }
  }

  onUpload() {
    const formData = new FormData();
    if (this.selectedFile) {
      formData.append('file', this.selectedFile, this.selectedFile.name);
    }
    this.http.post('http://localhost/import/excel', formData).subscribe({
      next: () => {
        console.log('Upload successful');
        this.message = 'Le fichier a été importé avec succès.';
      },
      error: (err) => {
        console.error('An error occurred:', err);
        this.message = 'Une erreur s\'est produite lors de l\'importation du fichier.';
      },
      complete: () => {
        console.log('Observable completed');
      }
    });
  }
}
