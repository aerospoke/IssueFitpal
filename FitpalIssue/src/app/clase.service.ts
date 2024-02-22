import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';


@Injectable({
  providedIn: 'root'
})


export class ClaseService {

  private apiUrl = 'http://127.0.0.1:8000/api/clases';

  constructor(private http: HttpClient) { }


}
