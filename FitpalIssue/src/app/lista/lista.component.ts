import { Component, OnInit } from '@angular/core';
import { ClaseService } from '../services/clase.service';

@Component({
  selector: 'app-lista',
  templateUrl: './lista.component.html',
  styleUrls: ['./lista.component.css']
})
export class ListaComponent implements OnInit {
  clases: any = [];

  constructor(private claseService: ClaseService) { }

  ngOnInit(): void {
    this.cargarClases();
  }

  cargarClases(): void {
    this.claseService.getClases().subscribe(
      data => {
        this.clases = data;
      },
      error => {
        console.log(error);
      });
  }
}
