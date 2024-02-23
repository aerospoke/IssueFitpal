import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ClaseService {
  private apiUrl = 'http://127.0.0.1:8000/api/clases';
  constructor(private http: HttpClient) { }

  
  getClases(): Observable<any> {
    return this.http.get(this.apiUrl);
  }

  crearClase(clase: any): Observable<any> {
    return this.http.post(this.apiUrl, clase);
  }

  actualizarClase(id: number, clase: any): Observable<any> {
    return this.http.put(`${this.apiUrl}/${id}`, clase);
  }

  eliminarClase(id: number): Observable<any> {
    return this.http.delete(`${this.apiUrl}/${id}`);
  }

}
