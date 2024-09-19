import { Table } from "./Interfaces";

export class InMemoryTable implements Table {
  private indexField: string;
  private name: string;
  private schema: Array<string>;
  private rows: Rows[];
  private insert(row: Rows): void {

  }
  private update(id: number, row: Rows): void {

  };
  private delete(id: number): void {

  };
  private select(): Rows | undefined {

  };
}
