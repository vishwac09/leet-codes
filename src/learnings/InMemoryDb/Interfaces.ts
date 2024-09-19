export interface Rows {
  // eslint-disable-next-line @typescript-eslint/no-explicit-any
  [key: string]: any;
}

export interface Table {
  indexField?: string;
  indexedData?: Array<Rows>;
  name: string;
  rows: Rows[];
  schema: Array<string>;

  delete(id: number): void;
  insert(row: Rows): void;
  select(): Rows | undefined;
  update(id: number, row: Rows): void;
}
