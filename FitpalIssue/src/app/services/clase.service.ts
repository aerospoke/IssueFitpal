import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ClaseService {
  private apiUrl = 'http://127.0.0.1:8000/api/clases'  ; // Ajusta esta URL a tu API

  constructor(private http: HttpClient) { }

  getClases(): Observable<any> {
    return this.http.get(this.apiUrl);
  }

  // Agrega aquí más métodos para POST, PUT, DELETE según sea necesario
}
