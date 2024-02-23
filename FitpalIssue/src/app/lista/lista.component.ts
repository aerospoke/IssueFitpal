import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ClaseService } from '../services/clase.service';

@Component({
  selector: 'app-lista',
  templateUrl: './lista.component.html',
  styleUrls: ['./lista.component.scss'],
  standalone: true,
  imports: [CommonModule],
})


export class ListaComponent implements OnInit {
  clases: any = [];

  constructor(private claseService: ClaseService) {}

  ngOnInit(): void {
    this.cargarClases();
  }

  cargarClases(): void {
    this.claseService.getClases().subscribe(
      data => {
        this.clases = data;
      },
      error => {
        console.error(error);
      }
    );
  }
}
